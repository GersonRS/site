import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { HttpModule } from '@angular/http';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { LoginPage } from '../pages/login/login';
import { CheckoutPage } from '../pages/checkout/checkout';
import { DeliverymanOrdersPage } from '../pages/deliveryman-orders/deliveryman-orders';
import { DeliverymanViewOrderPage } from '../pages/deliveryman-view-order/deliveryman-view-order';
import { ItemDetailPage } from '../pages/item-detail/item-detail';
import { OrdersPage } from '../pages/orders/orders';
import { ProductsPage } from '../pages/products/products';
import { SuccessPage } from '../pages/success/success';
import { ViewOrderPage } from '../pages/view-order/view-order';

import { AppHttpService } from './app-http.service';

import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { ProductProvider } from '../providers/product/product';

@NgModule({
  declarations: [
    MyApp,
    HomePage,
    LoginPage,
    CheckoutPage,
    DeliverymanOrdersPage,
    DeliverymanViewOrderPage,
    ItemDetailPage,
    OrdersPage,
    ProductsPage,
    SuccessPage,
    ViewOrderPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
    HttpModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage,
    LoginPage,
    CheckoutPage,
    DeliverymanOrdersPage,
    DeliverymanViewOrderPage,
    ItemDetailPage,
    OrdersPage,
    ProductsPage,
    SuccessPage,
    ViewOrderPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    AppHttpService,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    ProductProvider
  ]
})
export class AppModule {}
