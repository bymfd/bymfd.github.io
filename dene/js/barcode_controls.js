$(function(){
  var barcode_selector = $("#barcode-selector")
  barcode_selector.change(function(e){
    var selected = barcode_selector.find("option:selected").val()
    if(selected === "1d"){

      barcode_scanner_app.init()
    } else if(selected === "qr"){

      qr_barcode_scanner_app.init()
    }
  })
})


