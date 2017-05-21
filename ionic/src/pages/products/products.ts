import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { AppHttpService } from '../../app/app-http.service';

/**
 * Generated class for the ProductsPage page.
 *
 * See http://ionicframework.com/docs/components/#navigation for more info
 * on Ionic pages and navigation.
 */

@Component({
  selector: 'page-products',
  templateUrl: 'products.html',
})
export class ProductsPage {

  constructor(public navCtrl: NavController, public navParams: NavParams, private httpService: AppHttpService) {
  }


  ngOnInit(){
    this.httpService.builder('user')
        .list()
        .then((res) => {
          console.log(res);
        })
  }

}
