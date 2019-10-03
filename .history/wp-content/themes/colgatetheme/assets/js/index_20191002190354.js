jQuery('.dial').knob(
    {
      'min':10,
      'max':50,
      'width':100,
      'height':100,
      'displayInput':true,
      'fgColor':"#FF0000",
      'release':function(v) {alert(v);
    }
});