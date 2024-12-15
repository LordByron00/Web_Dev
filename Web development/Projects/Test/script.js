// DOM elements
const messageInput = document.getElementById('message-input');
const sendButton = document.getElementById('send-button');
const chatMessages = document.getElementById('message-area');

// Event listener for send button
sendButton.addEventListener('click', sendMessage);

// Event listener for Enter key press
messageInput.addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

// Function to send a message
function sendMessage() {
    const message = messageInput.value.trim();
    
    if (message !== '') {
        const messageElement = document.createElement('div');
        messageElement.className = 'message';
        messageElement.textContent = message;
        chatMessages.appendChild(messageElement);
        
        // Clear input field
        messageInput.value = '';
    }
}
