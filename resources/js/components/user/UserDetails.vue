<template>
    <div>
        <h1>User Details</h1>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-8 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                        alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <h5>Marie Horwitz</h5>
                    <p>Etudiant</p>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-4">
                        <div class="height-3rem d-flex flex-direction-row justify-content-end">
                                <router-link to="/user/edit" class="btn btn-primary"><i class="far fa-edit mb-5"></i> Edit</router-link>
                        </div>
                        <h6>Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <p class="text-muted">info@example.com</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Phone</h6>
                            <p class="text-muted">123 456 789</p>
                        </div>
                        </div>
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Niveau</h6>
                            <p class="text-muted">Licence 1</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Spécialité</h6>
                            <p class="text-muted">Science de l'information et de communication</p>
                        </div>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>
<style>
.gradient-custom{
    background-image: linear-gradient(251deg, #0d6efd, #ffc107);
}
.height-3rem{
    height: 3rem;
}
</style>
