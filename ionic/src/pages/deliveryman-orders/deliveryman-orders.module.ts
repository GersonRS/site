import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { DeliverymanOrdersPage } from './deliveryman-orders';

@NgModule({
  declarations: [
    DeliverymanOrdersPage,
  ],
  imports: [
    IonicPageModule.forChild(DeliverymanOrdersPage),
  ],
  exports: [
    DeliverymanOrdersPage
  ]
})
export class DeliverymanOrdersPageModule {}
