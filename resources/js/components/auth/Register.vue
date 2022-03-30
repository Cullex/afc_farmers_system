<template>
    <div class="">
        <form @submit.prevent="registerUser" autocomplete="off" class="card-body px-4">
            <div class="text-center w-75 m-auto">
                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Sign Up</h4>
                <p class="text-muted mb-3">Enter your email address and password to sign up</p>
            </div>
            <p v-if="message" :class="['alert text-center mb-0 rounded-0 mb-3 px-3' , error ? 'alert-danger' : 'alert-success']">
                {{ message }}
            </p>
            <div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" v-model="form.name" :class="[ 'form-control' , form.errors.get('name') ? 'is-invalid' : '' ]" placeholder="Enter your name" autocomplete="unique-1">
                    <div v-text="form.errors.get('name')" class="invalid-feedback"/>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" v-model="form.last_name" :class="[ 'form-control' , form.errors.get('last_name') ? 'is-invalid' : '' ]" placeholder="Enter last name" autocomplete="unique-1">
                    <div v-text="form.errors.get('last_name')" class="invalid-feedback"/>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" v-model="form.email" :class="[ 'form-control' , form.errors.get('email') ? 'is-invalid' : '' ]" placeholder="Enter your email" autocomplete="unique-1">
                    <div v-text="form.errors.get('email')" class="invalid-feedback"/>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" v-model="form.password" :class="[ 'form-control' , form.errors.get('password') ? 'is-invalid' : '' ]"  placeholder="Must include lowercase,uppercase,digit,punctuation" autocomplete="unique-2">
                    <div v-text="form.errors.get('password')" class="invalid-feedback"/>
                </div>
                <div class="form-group mb-3">
                    <label>Password Confirmation</label>
                    <input type="password" v-model="form.password_confirmation" :class="[ 'form-control' , form.errors.get('password_confirmation') ? 'is-invalid' : '' ]"  placeholder="Must include lowercase,uppercase,digit,punctuation" autocomplete="unique-2">
                    <div v-text="form.errors.get('password_confirmation')" class="invalid-feedback"/>
                </div>
                <div class="form-group mb-0 text-center">
                    <button @click.prevent="registerUser" :class="['btn btn-primary px-4' , form.loading || loading ? 'btn-loading' : '']" type="submit">Register</button>
                </div>.
                <div> </div>
                <div class="form-group mb-0 text-center">
                     <a href="/login" class="text-primary float-center"><small>Registered?</small></a>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import Form from "../../core/forms/form";

    export default {
        name: "Register",
        data()
        {
            return {
                loading : false,
                error : false,
                message : '',
                form : new Form({
                       name : '',
                       last_name : '',
                       email : '',
                       password  :'',
                       password_confirmation : ''
                })
            };
        },
        methods : {
            registerUser()
            {
                this.loading = true;
                this.error = false;
                this.message = "";
                this.form.submit('/registerUser').then((response) => {
                    if (response.data.success === true ){
                        Swal.fire(
                            'Registration Successfull!',
                            'You have successfully registered',
                            'success'
                        )
                        this.message = response.data.message;
                        setTimeout(function () {
                            window.location = `${window.location.origin}/`;
                        } , 2000 );
                    } else {
                        this.message = response.data.message;
                        this.loading = false;
                        this.error = true;
                    }
                }).catch((error) => {
                    this.loading = false;
                });
            }
        }
    }
</script>
