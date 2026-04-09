<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Smart Chatbot</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #8e44ad, #3498db);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }

    .chat-wrapper {
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
      width: 400px;
      max-width: 95%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .chat-header {
      background: linear-gradient(to right, #8e44ad, #3498db);
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }

    .chat-box {
      flex: 1;
      padding: 20px;
      height: 400px;
      overflow-y: auto;
      background-color: #f7f9fc;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .message {
      max-width: 80%;
      padding: 12px 18px;
      border-radius: 20px;
      font-size: 14px;
      animation: fadeIn 0.3s ease;
    }

    .user {
      align-self: flex-end;
      background: #3498db;
      color: #fff;
      border-bottom-right-radius: 0;
    }

    .bot {
      align-self: flex-start;
      background: #e0e0e0;
      color: #333;
      border-bottom-left-radius: 0;
    }

    .chat-input {
      display: flex;
      border-top: 1px solid #ddd;
      padding: 12px;
      background-color: #fafafa;
    }

    .chat-input input {
      flex: 1;
      padding: 10px 15px;
      border-radius: 25px;
      border: 1px solid #ccc;
      outline: none;
      font-size: 14px;
      transition: 0.3s;
    }

    .chat-input input:focus {
      border-color: #3498db;
      box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    .chat-input button {
      margin-left: 10px;
      padding: 10px 20px;
      border: none;
      background: #8e44ad;
      color: white;
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .chat-input button:hover {
      background: #732d91;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #ccc;
      border-radius: 3px;
    }
  </style>
</head>
<body>

  <div class="chat-wrapper">
    <div class="chat-header">🤖 Smart Chatbot</div>
    <div class="chat-box" id="chat-box">
      <div class="message bot"><strong>Bot:</strong> Hello! How can I help you?</div>
    </div>
    <div class="chat-input">
      <input type="text" id="user_input" placeholder="Type your message here...">
      <button onclick="sendMessage()">Send</button>
    </div>
  </div>

  <script>
    function sendMessage() {
      let user_input = $("#user_input").val().trim();
      if (user_input === '') return;

      $("#chat-box").append(`<div class="message user"><strong>You:</strong> ${user_input}</div>`);
      $("#user_input").val('');
      $("#chat-box").scrollTop($("#chat-box")[0].scrollHeight);

      $.ajax({
        url: "{{ route('bot.process') }}",
        method: "POST",
        data: {
          user_input: user_input,
          _token: "{{ csrf_token() }}"
        },
        success: function(response) {
          $("#chat-box").append(`<div class="message bot"><strong>Bot:</strong> ${response.reply}</div>`);
          $("#chat-box").scrollTop($("#chat-box")[0].scrollHeight);
        },
        error: function(xhr, status, error) {
          $("#chat-box").append(`<div class="message bot"><strong>Bot:</strong> Oops! Something went wrong.</div>`);
        }
      });
    }

    // Allow enter key to send message
    $('#user_input').on('keypress', function(e) {
      if (e.which === 13) sendMessage();
    });
  </script>

</body>
</html>
