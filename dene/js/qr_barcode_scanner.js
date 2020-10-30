var qr_barcode_scanner_app = {
  init: function(){
    let scanner = new Instascan.Scanner({
      video: document.getElementById('barcode-capture'),
      scanPeriod: 2
    });
    scanner.addListener('scan', function (content) {
      $("#barcode-result").text(content)
    });
    Instascan.Camera.getCameras().then(function (cameras) {
      console.log("Looking for cameras")
      console.log(cameras)
      if (cameras.length > 0) {
        scanner.start(cameras[cameras.length - 1]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
  }
}
