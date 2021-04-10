(function ($) {
    Drupal.behaviors.js_example = {
      attach: function (context, settings) {
        $.ajax({
          type: "POST",
          url: 'http://ndrupal8.com/restpost',
          headers: {
              'X-CSRF-Token': 'AcZ1688MdHGThH4TxAgnjYqVm4zp8OyHkVXxLm19sQ8',
              'content-type': 'application/json'
          },
          data: JSON.stringify({
              name: "and POST request using jquery worked..."
          }),
          success: function(event) {
              console.log(event);
          }
      });

      }
    };
  })(jQuery);