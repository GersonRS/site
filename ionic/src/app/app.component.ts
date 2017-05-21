import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { MenuController } from 'ionic-angular';

import { HomePage } from '../pages/home/home';
import { CheckoutPage } from '../pages/checkout/checkout';
import { DeliverymanOrdersPage } from '../pages/deliveryman-orders/deliveryman-orders';
import { OrdersPage } from '../pages/orders/orders';
import { ProductsPage } from '../pages/products/products';

@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: any = HomePage;

  client_pages: Array<{title: string, component: any}>;
  deliveryman_pages: Array<{title: string, component: any}>;

  constructor(
      public platform: Platform,
      public statusBar: StatusBar,
      public splashScreen: SplashScreen,
      public menuCtrl: MenuController
  ) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.client_pages = [
      { title: 'Home', component: HomePage },
      { title: 'Produtos', component: ProductsPage },
      { title: 'CheckOut', component: CheckoutPage },
      { title: 'Pedidos', component: OrdersPage }
    ];

    this.deliveryman_pages = [
      { title: 'Home', component: HomePage },
      { title: 'Pedidos', component: DeliverymanOrdersPage }
    ];

    this.enableMenu();

  }

  enableMenu() {
    this.menuCtrl.enable(true, 'client');
    this.menuCtrl.enable(false, 'deliveryman');
  }

  initializeApp() {
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }
}
