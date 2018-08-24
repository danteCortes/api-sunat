<template>
  <div>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Tech Cortés</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#" @click.prevent="salir">Salir</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <router-link to="/dashboard" class="nav-link">
                  <i class="fas fa-home"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/obligados-sunat" class=nav-link>
                  <i class="fas fa-file-excel"></i>
                  Obligados Sunat
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/subir-padron-sunat" class=nav-link>
                  <i class="fas fa-file-excel"></i>
                  Subir Padrón Sunat
                </router-link>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <router-view></router-view>
        </main>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Dashboard mounted.')
  },
  methods: {
    salir(){
      this.$store.commit("logout");
      this.$router.push('/');
    }
  }
}
</script>

<style>
  body {
    font-size: .875rem;
    background-image: none;
  }

  .feather {
    width: 16px;
    height: 16px;
    vertical-align: text-bottom;
  }

  /*
  * Sidebar
  */

  .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 100; /* Behind the navbar */
    padding: 48px 0 0; /* Height of navbar */
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
  }

  .sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: .5rem;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
  }

  @supports ((position: -webkit-sticky) or (position: sticky)) {
    .sidebar-sticky {
      position: -webkit-sticky;
      position: sticky;
    }
  }

  .sidebar .nav-link {
    font-weight: 500;
    color: #333;
  }

  .sidebar .nav-link .feather {
    margin-right: 4px;
    color: #999;
  }

  .sidebar .nav-link.active {
    color: #007bff;
  }

  .sidebar .nav-link:hover .feather,
  .sidebar .nav-link.active .feather {
    color: inherit;
  }

  .sidebar-heading {
    font-size: .75rem;
    text-transform: uppercase;
  }

  /*
  * Content
  */

  [role="main"] {
    padding-top: 48px; /* Space for fixed navbar */
  }

  /*
  * Navbar
  */

  .navbar-brand {
    padding-top: .75rem;
    padding-bottom: .75rem;
    font-size: 1rem;
    background-color: rgba(0, 0, 0, .25);
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
  }

  .navbar .form-control {
    padding: .75rem 1rem;
    border-width: 0;
    border-radius: 0;
  }

  .form-control-dark {
    color: #fff;
    background-color: rgba(255, 255, 255, .1);
    border-color: rgba(255, 255, 255, .1);
  }

  .form-control-dark:focus {
    border-color: transparent;
    box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
  }
</style>
