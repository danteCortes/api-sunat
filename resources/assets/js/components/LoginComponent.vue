<template>
  <form class="form-signin" @submit.prevent="ingresar" autocomplete="off">
    <img class="mx-auto d-block" :src="'../img/LogoTC.png'" alt=""
      width="150" height="150">
    <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
    <label class="sr-only">DNI:</label>
    <input type="text" class="form-control" placeholder="DNI" v-model="credentials.dni" required autofocus>
    <label class="sr-only">Password</label>
    <input type="password" class="form-control" placeholder="Password" required v-model="credentials.password">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" v-model="credentials.remember"> Recuerdame
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">TechCortés &copy; 2018</p>
  </form>
</template>

<script>
  import {login} from '../helpers/auth';

  export default {
    mounted() {
      console.log('Component mounted.')
    },
    name: 'login-component',
    data() {
      return {
        credentials: {
          dni: '',
          password: '',
          remember: '',
        },
        error: null,
        claseApp: true
      }
    },
    computed: {
    },
    methods: {
      ingresar(){
        this.$store.dispatch('login');

        login(this.$data.credentials)
          .then((res) => {
            this.$store.commit("loginSuccess", res);
            this.$router.push({path: '/dashboard'});
          })
          .catch((error) => {
            this.$store.commit("loginFailed", {error});
          })
      }
    }
  }
</script>

<style>

  body {
    background-color: #f5f5f5;
    /*background-image: url("/img/fondo.jpg");*/
  }

  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
  .form-signin .checkbox {
    font-weight: 400;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>

