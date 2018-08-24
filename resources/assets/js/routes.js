import LoginComponent from './components/LoginComponent.vue';
import DashboardComponent from './components/DashboardComponent.vue';
import ObligadosSunatInicio from './components/ObligadosSunat/InicioComponent.vue';
import PadronSunatComponent from './components/PadronSunat/PadronSunatComponent.vue';

export const routes = [
  {
    path: '/',
    component: LoginComponent
  },
  {
    path: '/dashboard',
    component: DashboardComponent,
    meta: {
      requiresAuth: true
    },
    children: [
      {
        path: '/obligados-sunat',
        component: ObligadosSunatInicio
      },
      {
        path: '/subir-padron-sunat',
        component: PadronSunatComponent
      }
    ]
  }
]