import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';

import 'rxjs/add/operator/toPromise';

@Injectable()
export class AppHttpService {
    private url: string;
    private header: Headers;

    constructor (private http: Http) {
        this.setAccessToken();
    }

    setAccessToken () {
        let token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImE1ODc0YjliMjVlZGJjZjZlMWJhMGFkZjVmMDBhMjQwODRkYjI0OGFiOTg1MmU0ZTFkMDAwNDA1MmU2YzY0YmNlZWM4NGM0MGQzNDc5MjYyIn0.eyJhdWQiOiIyIiwianRpIjoiYTU4NzRiOWIyNWVkYmNmNmUxYmEwYWRmNWYwMGEyNDA4NGRiMjQ4YWI5ODUyZTRlMWQwMDA0MDUyZTZjNjRiY2VlYzg0YzQwZDM0NzkyNjIiLCJpYXQiOjE0OTUyNTk3OTcsIm5iZiI6MTQ5NTI1OTc5NywiZXhwIjoxNDk2NTU1Nzk3LCJzdWIiOiIyIiwic2NvcGVzIjpbIioiXX0.oSPlgT3hxnmtjcLprq30_orwsGByAJeFPGy8baOIO5MLQVCPV8E_E_XOuij339taj5wgwJ43yir125zndWhO3V5TCCAjk3r8ouv-OtgPBnZUo-QHHuy7N4tILPUpspvyMTnkdQeKYIjZCC2pePLb6dtuWGuo_9bmbpQmurYvD_Q1KjTGpDXBMQwZm8kt7eDXZUBO-ZkZriTZZ63oGVPCusnaY5sAalmGzdy3bi9YHRCp3ocdzdQYDTGIp3K1G-bGTpI7xLlRu236NqHUqI-byhXBJx7C7HUcOKvI9DiegI_VembZUAphyOVPf55f4cQ1gbR2pnTE1VVBQcDFGTyw5DERg_6Vp0Uc12X5yONnxUgNwsH9HDgajVaMSqesdDScR33jeqi_4qEW6_46rYubFnTgMLXO9a0VLOrie4H_sl7aott-FOqwMZysF_ZZwENem91nA73mdVpgAGLIXRmlaf0BEiJtWp4c5Y-PaIy1X9goNjoLSKcK5pkEtY7PALNR2dRqds13wuu0DjnAUVfQcjGBtJcDS43okTQhmHAlU6Shhgns-iNsWlO36LKTOhjLLpXnxDVpzN7rpghG3brTmgxdPRfRFStbUvEIMwecY1g0anGT2bs0m_E-t9BmxWMdnsgeF2YkpB1nPElDRP5l8x8aqf4DbyLenVBLO56Ow70';
        this.header = new Headers({'Authorization': 'Bearer ' + token});
    }

    builder (resource: string) {
        this.url = 'http://site.app/api/' + resource;
        return this;
    }

    list () {
        let url = this.url;

        return this.http.get(url, {headers: this.header})
            .toPromise()
            .then((res) => {
                return res.json() || {};
            });
    }
}