<!-- Signin Template -->
<template id="signinTemplate">
   <div class="container py-4">
            <form ref='form' @submit.prevent='handleForm' action="" class='signin-form col-md-6 m-auto'>
                <h2>Signin</h2>
                <div class="form-group">
                    <input class="form-control" required v-model='user.email' type="email" id='email' placeholder="Adresse électronique">
                </div>
                <div class="form-group">
                    <input class="form-control"  required v-model='user.password' type="password" id='password' placeholder="Mot de passe">
                </div>
                <input class="btn btn-primary form-control text-white px-2" :disabled='!isFormValid'  value="Signin">
            </form>
   </div>
</template>
<script>
const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
export default {
    data () {
        return {
            user: {
                email:'',
                password:''
            }
         }
    },
    methods: {
        handleForm () {
            let formvalue = Object.assign({}, this.user)
            this.resetFormValues()
            this.$emit('signin-form', {type:'signin', data:formvalue})
        },
        resetFormValues () {
            this.user.email = ''
            this.user.password = ''
        },
        isValid(prop) {
            switch(prop) {
                case 'email':
                    return emailRegex.test(this.user.email)
                    break
                case 'password':
                    return this.user.password.length >= 6
                    break
                default:
                    return false
            }
        },
    },
    computed: {
        isFormValid () {
            return (this.isValid('email') && this.isValid('password'))
        }
    }


}
</script>

<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css?family=PT+Sans');

*, *::before, *::after {
	box-sizing: border-box;
}

:root {
	--brandColor:#008b8b;
	--brandColorDark:#057272;
}

[v-cloak] {
	opacity: 0;
}

body {
	padding: 0;
	margin: 0;
	font-family: 'PT Sans', sans-serif;
	background:#e0e0e0;
}

#app {
	border-top:.5em solid var(--brandColor);
	max-width:800px;
	margin: 0 auto;
	position:absolute;
	top:50%;
	left:50%;
	width:96%;
	transform:translate(-50%, -50%);
	padding: 2em 3em 1em;
	background:white;
	overflow: hidden;
	box-shadow: 0 10px 6px -6px rgba(0,0,0,.2);
	animation: enterFromBottom .7s .3s ease-out both;

	@media screen and (max-width:500px){
		padding: 2em 1em 1em;
	}
}

.actions {

	button {
		all:unset;
		display: inline-block;
		padding:1em;
		letter-spacing: .05em;
		font-size: 14px;
		cursor: pointer;
		border:1px solid;
		color:white;
		border:none;
		background:var(--brandColor);
		transition:250ms;
		margin: 0 .2em 0 0;
		opacity: .4;

		&.active {
			opacity: 1;
			background:var(--brandColorDark);
		}

	}
}

.form {
	&-enter {
		transform:translateY(-1em);
		opacity:0;
	}
	&-leave-to {
		transform:scale(0.95);
		opacity: 0;
	}
	&-enter-active {
		transition:.3s ease-out;
	}
	&-leave-active {
		transition:.3s ease;
	}
}

form h2, header h2 {
	text-align: center;
	color:var(--brandColor);
}

.register-form, .signin-form {
	margin: 2em 0;
	padding:1em;
    border-radius: 4px;
    border: 1px solid #ebeef5;
}

.form-group {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	padding:8px;

	label {
		flex:1;
		text-align: right;
		margin-right: 2em;
	}

	input {
		font-size: inherit;
		border:none;
		background:whitesmoke;
		font-family:inherit;
		padding:.4em;
		flex:1.5;
	}

	input.invalid {
		border:1px solid tomato;
	}
}

.feedback {
	padding: 1em;

	p {
		line-height: 1.4;
		max-width:50ch;
		margin: 10px auto;
		text-align:center;
	}
}

form {

	input[type=submit] {
		display: block;
		margin: 2em 0 2em auto;
		padding: .6em 1em;
		font-size: inherit;
		cursor: pointer;
		background:var(--brandColor);
		color:white;
		border:none;
	}

	input[type=submit]:disabled {
		opacity: .4;
		cursor: not-allowed;
	}

	input[type=submit]:hover {
		background: var(--brandColorDark);
	}

}

@keyframes enterFromBottom {
	0%  {
		opacity:0;
		transform:translate(-50%, -45%);
	}
	100% {
		opacity:1;
		transform:translate(-50%, -50%);
	}
}
</style>
