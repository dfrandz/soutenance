@extends('admin.layouts.master')

@section('content')
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Departments</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Departments</li>
            </ul>
        </div>
    </div>
</div>

<div class="student-group-form">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search by ID ...">
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search by Name ...">
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search by Year ...">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="search-student-btn">
                <button type="btn" class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Departments</h3>
                        </div>
                        <div class="col-auto text-end float-end ms-auto download-grp">
                            
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#save_invocies_details"><i
                                    class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                <table
                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                    <thead class="student-thread">
                        <tr>
                            <th>
                                <div class="form-check check-tables">
                                    <input class="form-check-input" type="checkbox" value="something">
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Create date</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($roles))
                            @foreach ($roles as $role)    
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>PRE2209</td>
                                    <td>
                                        <h2>
                                            <a>{{$role->libelle}}</a>
                                        </h2>
                                    </td>
                                    <td>Il y {{relative_time($role->updated_at)}}</td>
                                    
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="edit-department.html" class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="7">No Data Found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal custom-modal fade" id="save_invocies_details" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Gestion Roles</h3>
                </div>
                <form action="{{route('admin.storeRole')}}" method="POST" id="roleForm">
                    @method('POST')
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label">Repeat Password</label>
                        <div class="col-lg-13">
                            <input type="text" name="libelle" class="form-control">
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script-role')
<script>
    console.log('scripte role')
    toastr.options.preventDuplicates = true;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="crfs-token"]').attr('content')
        }
    });
    $(function() {
            $('#roleForm').on('submit',
                function(e){
                    e.preventDefault();
                    var submitButton = $('#submitButton');
                    var originalText = submitButton.html();
                            
                    var form = this;
                    $.ajax({
                        url: $(form).attr('action'),
                        method: $(form).attr('method'),
                        data: new FormData(form),
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        beforeSend: function() {
                            submitButton.prop('disabled', true);
                            submitButton.html('<span class="spinner-border spinner-border-sm me-2" role="status"></span> Saving...');
                        },
                        success: function(data) {
                            console.log('response:', data)
                            // Réinitialiser le bouton de soumission
                            submitButton.prop('disabled', false);
                            submitButton.html(originalText);
                            if (!data.success) {
                                $.each(data.errors, function(prefix, val) {
                                    toastr.error(val[0]);
                                    // console.log('response value:', val[0])
                                });
                            }
                            if(data.status_code == 201){
                                toastr.success(data.message);
                                $(form)[0].reset();
                            }
                            // else {
                            //     $(form)[0].reset();
                            //     location.reload();
                            //     // window.location.href = "/admin/dashboard"
                            //     toastr.success(data.message);
                            // }
                        
                        },
                        error: function(xhr, status, error) {
                            // Réinitialiser le bouton de soumission
                            submitButton.prop('disabled', false);
                            submitButton.html(originalText);
                            toastr.error(error);
                            $.each(xhr.responseJSON.errors, function(prefix, val) {
                                    toastr.error(val[0]);
                            });
                         
                        }
                    }, 'json');
            })
        })
</script>
@endpush