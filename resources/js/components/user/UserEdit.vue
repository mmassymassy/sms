<template>
    <form>
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
                    <input class="form-control w-80" type="text" name="name" value="Maria Horwitz" id="name" >
                    <p>Etudiant</p>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-4">
                        <div class="height-3rem d-flex flex-direction-row justify-content-end">
                                <router-link to="/user/edit" class="btn btn-outline-primary"><i class="far fa-save mb-5"></i> Save</router-link>
                        </div>
                        <h6>Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <input placeholder="maassi@g.com" disabled type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Phone</h6>
                            <input class="form-control" type="tel" name="tel" id="tel" value="0758455456">
                        </div>
                        </div>
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Niveau</h6>
                            <select name="level" id="level" class="form-select">
                                <option value="l1">Licence 1</option>
                                <option value="l2">Licence 2</option>
                                <option value="l3">Licence 3</option>
                                <option value="m1">Master 1</option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Spécialité</h6>
                            <input type="text" name="spec" id="spec" value="INformatique" class="form-control">
                        </div>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </form>
</template>

<style>
.form-control{
    width: 100%;
    margin: .5rem auto;
}
.w-80{
    width: 80%;
}

</style>
