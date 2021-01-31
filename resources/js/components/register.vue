<template>
<div>
    <!--Register-->
    <!-- Container -->
    <div class="container mx-auto animate__animated animate__backInDown">
        <div class="flex justify-center items-center h-screen px-2">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-lg">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-100 flex hidden sm:block md:block lg:block lg:w-5/12 xl:block xl:w-5/12 bg-cover rounded-l-lg"
                >
                <img class="align-middle w-full md:w-4/5 z-50 mx-auto" style="height:300px; margin-top:50%; margin-bottom:50%" src="svg/hero-svg.svg" />
                </div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h1 class="pt-4 text-4xl text-center">Eduane</h1>
                    <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    First Name
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstName"
                                    type="text"
                                    placeholder="First Name"
                                    v-model="data.firstName"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Last Name
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    placeholder="Last Name"
                                    v-model="data.lastName"
                                />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="Email"
                                v-model="data.email"
                                required
                            />
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    type="password"
                                    placeholder="******************"
                                    v-model="data.password"
                                />
                                <p class="text-xs italic text-red-500">Please choose a password.</p>
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                    Confirm Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="c_password"
                                    type="password"
                                    placeholder="******************"
                                    v-model="data.password2"
                                />
                            </div>
                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-orange-100 rounded-full  focus:outline-none focus:shadow-outline"
                                type="button"
                                @click="register"
                            >
                                Register Account
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-orange align-baseline hover:text-blue-800"
                                href="#"
                            >
                                Forgot Password?
                            </a>
                        </div>
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-orange align-baseline hover:text-blue-800"
                                href="/login"
                            >
                                Already have an account? Login!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
			data:{
				firstName: '',
				lastName: '',
				email: '',
                password: '',
                password2: ''
			}   
        }
    },
    methods: {
		async register() {
			if (this.data.firstName.trim()=='') return this.showError('First name is required');
			if (this.data.lastName.trim()=='') return this.showError('Last name is required');
			if (this.data.email.trim()=='') return this.showError('Email  is required');
            if (this.data.password.trim()=='') return this.showError('Password is required');
            if (this.data.password !== this.data.password2) {
                return this.showError('Password does not match');
            }
            
			const res = await this.callApi('post', 'app/register_user', this.data)
			if (res.status === 201) {
                this.successMsg('Registration Successful')
                window.location.href = '/login'
			}else {
				if (res.status===422) {
					console.log(res.data.errors)
					for(let i in res.data.errors){
						this.showError(res.data.errors[i][0])
					}
					}else{
				this.showError('Something went wrong');
				}
			}
        },
    showError(msg) {
      // Use sweetalert2
            Toast.fire({
            icon: 'error',
            title: msg
            })
                },
    successMsg(msg) {
      // Use sweetalert2
            Toast.fire({
            icon: 'success',
            title: msg
            })
                },
    },
created() {
    console.log('here we go...')
}
}
</script>

<style>

</style>