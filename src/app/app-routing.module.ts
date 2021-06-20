import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'contact',
    loadChildren: () => import('./contact/contact.module').then( m => m.ContactPageModule)
  },
  {
    path: 'register',
    loadChildren: () => import('./register/register.module').then( m => m.RegisterPageModule)
  },
  {
    path: 'main',
    loadChildren: () => import('./main/main.module').then( m => m.MainPageModule)
  },
  {
    path: 'applicationform',
    loadChildren: () => import('./applicationform/applicationform.module').then( m => m.ApplicationformPageModule)
  },
  {
    path: 'mainpage2',
    loadChildren: () => import('./mainpage2/mainpage2.module').then( m => m.Mainpage2PageModule)
  },
  {
    path: 'personalinformation',
    loadChildren: () => import('./personalinformation/personalinformation.module').then( m => m.PersonalinformationPageModule)
  },
  {
    path: 'mainpage4',
    loadChildren: () => import('./mainpage4/mainpage4.module').then( m => m.Mainpage4PageModule)
  },
  {
    path: 'mainpage3',
    loadChildren: () => import('./mainpage3/mainpage3.module').then( m => m.Mainpage3PageModule)
  },
  {
    path: 'previousexam',
    loadChildren: () => import('./previousexam/previousexam.module').then( m => m.PreviousexamPageModule)
  },
  {
    path: 'payment',
    loadChildren: () => import('./payment/payment.module').then( m => m.PaymentPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
