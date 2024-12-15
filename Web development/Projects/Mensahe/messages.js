const chatdiv = document.querySelector(".chat-box");
const uid = document.querySelector(".details .unique_id");
const outgoing = document.querySelector(".sending");
const incoming = document.querySelector(".receiving p");
const form = document.querySelector(".typing-area");
const textArea = document.querySelector(".typing-area input");
const sendBtn = document.querySelector(".typing-area button");

// console.log(outgoing);
form.addEventListener("submit", (e) => {
    e.preventDefault();
});


sendBtn.addEventListener("click", () => {
    const textMessage = textArea.value;


    const user_id = uid.innerText;
    const message = textArea.value.trim(); 
    
    if (message !== '') {

        const requestData = {
            user_id: user_id,
            message: message
        };

        // console.log(requestData);

        const url = "insertMessage.php";

        fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(requestData)
        })
        .then((response) => {
            if (response.ok) {
                textArea.value = ''; 
                // return response.json();
                // console.log(response.json);
            } else {
            throw new Error("Request failed.");
            }
        })
        .then((data) => {
            // console.log(data); // Log the response data
        })
        .catch((error) => {
            console.error(error); // Handle any errors
        });
    }
});