export default {
  setHttp (http) {
    this.http = http;
  },
  setRouter (router) {
    this.router = router;
  },
  properties () {
    var self = this;
    return new Promise( function(resolve, reject) {
      self.http({url: self.router.route('data.product.property'), method: 'GET'}).then(function (response) {
          resolve(response.data);
      }, function (response) {
          reject(response.data);
      });
    })
  },
}
