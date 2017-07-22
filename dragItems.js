$(document).ready(function(){

  $(".shop .item").draggable({
    helper:'clone'
  });


  $(".slot").droppable({
    drop: function(event, ui)
    {
      var dropped = ui.draggable;
      var droppedOn = $(this);
      $(dropped).clone().appendTo($('.shop'))
      $(dropped).detach().css({top: 0, left: 0}).appendTo(droppedOn);
    }
  });

});
