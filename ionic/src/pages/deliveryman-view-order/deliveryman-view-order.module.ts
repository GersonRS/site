import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { DeliverymanViewOrderPage } from './deliveryman-view-order';

@NgModule({
  declarations: [
    DeliverymanViewOrderPage,
  ],
  imports: [
    IonicPageModule.forChild(DeliverymanViewOrderPage),
  ],
  exports: [
    DeliverymanViewOrderPage
  ]
})
export class DeliverymanViewOrderPageModule {}
