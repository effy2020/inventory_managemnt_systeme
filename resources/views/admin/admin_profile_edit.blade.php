@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Page de Modification du Profil</h4>
                        
                        <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nom</label>
                                <div class="col-sm-10">
                                    <input name="name" class="form-control" type="text" value="{{ $editData->name }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email de l'Utilisateur</label>
                                <div class="col-sm-10">
                                    <input name="email" class="form-control" type="text" value="{{ $editData->email }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nom d'Utilisateur</label>
                                <div class="col-sm-10">
                                    <input name="username" class="form-control" type="text" value="{{ $editData->username }}" id="example-text-input">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Image du Profil</label>
                                <div class="col-sm-10">
                                    <input name="profile_image" class="form-control" type="file" id="image">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Aperçu de l'image du profil">
                                </div>
                            </div>
                            <!-- fin de la ligne -->

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Mettre à Jour le Profil">
                        </form>
                         
                    </div>
                </div>
            </div> <!-- fin de la colonne -->
        </div> <!-- fin de la rangée -->

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
