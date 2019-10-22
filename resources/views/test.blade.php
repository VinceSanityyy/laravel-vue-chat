<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script>
  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('f27aa653904dfe94009d', {
        cluster: 'ap1',
        forceTLS: true
      });
  
      var channel = pusher.subscribe('messages');
      channel.bind('NewMessage', function(data) {
        alert(JSON.stringify(data));
      });
    </script>
  </head>
  <body>
    <h1>Pusher Test</h1>
    <p>
      Try publishing an event to channel <code>my-channel</code>
      with event name <code>my-event</code>.
    </p>
  </body>