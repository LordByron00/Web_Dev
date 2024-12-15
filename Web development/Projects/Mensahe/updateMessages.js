const chatbox = document.querySelector(".chat-box");
const msgP = document.querySelector(".details p");

const session_id = document.querySelector(".session_user").innerText;
const user_id = document.querySelector(".details .unique_id").innerText;
const url = `getMessages.php?user_id=${user_id}`;

const existingMessages = new Set();


function fetchData() {
    fetch(url)
        .then(response => response.json())
        .then(data => {
            // console.log(data[0]);
            // console.log(existingMessages);
            data.forEach((msg) => {
                if (!existingMessages.has(msg.msg_id)) {

                    existingMessages.add(msg.msg_id);

                    if (msg.msg_sender_uid == session_id) {
                        const sendingdiv = document.createElement('div');
                        sendingdiv.classList.add('chat', 'sending');
                        chatbox.appendChild(sendingdiv);

                        const detsdiv = document.createElement('div');
                        detsdiv.classList.add('details');
                        sendingdiv.appendChild(detsdiv);

                        const msgPara = document.createElement('p');
                        msgPara.innerText = msg.message_text;
                        detsdiv.appendChild(msgPara);
                    } else {
                        const sendingdiv = document.createElement('div');
                        sendingdiv.classList.add('chat', 'receiving');
                        chatbox.appendChild(sendingdiv);
                        
                        const imgDiv = document.createElement('img');
                        imgDiv.src = msg.img;
                        sendingdiv.appendChild(imgDiv);

                        const detsdiv = document.createElement('div');
                        detsdiv.classList.add('details');
                        sendingdiv.appendChild(detsdiv);
                
                        const msgPara = document.createElement('p');
                        msgPara.innerText = msg.message_text;
                        detsdiv.appendChild(msgPara);
                    }
                }
                

            });
        })
        .catch(error => {
            // Handle any errors
            console.error(error);
    });
}

fetchData();
setInterval(fetchData, 3000);
