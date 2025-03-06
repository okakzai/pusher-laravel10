<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('ca370e62bd46f4c6960f', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('update-status');
    channel.bind('App\\Events\\MessageSent', function(data) {
      alert(JSON.stringify(data['message']['status']));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  {{-- <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p> --}}
</body>