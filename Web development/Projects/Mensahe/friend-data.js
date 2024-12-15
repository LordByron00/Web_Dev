const lu = document.querySelector(".user-container");


const getOnlineFriends = async () => {

    const response = await fetch("userlist.php");
    const onlineFriends = await response.json();
    // console.log(onlineFriends);
    if(onlineFriends.length > 0) {
        onlineFriends.forEach((friend) => {
            
            const uid = friend[1];
            const firstName = friend[2];
            const lastName = friend[3];
            const status = friend[6];
            const img = friend[7];

             // Check if any existing user element matches the data from the database
             const existingUserDiv = Array.from(lu.querySelectorAll(".user")).find((userDiv) => {
                const uniqueIdDiv = userDiv.querySelector(".unique_id");
                const statusDiv = userDiv.querySelector(".status");
                return (
                  uniqueIdDiv.innerText === uid && statusDiv.innerText === status
                );
              });

            //   console.log(existingUserDiv);

              if (!existingUserDiv) {
                // The user already exists, no need to create a new element
                const matchingUserDiv = Array.from(lu.querySelectorAll(".user")).find((userDiv) => {
                const uniqueIdDiv = userDiv.querySelector(".unique_id");
                return uniqueIdDiv.innerText === uid;
                });
                
                if (matchingUserDiv) {
                  const statusDiv = matchingUserDiv.querySelector(".status");
                  statusDiv.innerText = status;
                  return;
                }
            } else {
                //The wenbite is not synched with the data in the database so we will modify the elements
                return;
              }

            const userDiv = document.createElement('div');
            userDiv.classList.add('user');
            lu.appendChild(userDiv);

            userDiv.addEventListener('click', () => {
                const uid = userDiv.querySelector(".unique_id").innerText;
                location.href = `chat.php?uid=${uid}`;
              });
    
            const userImg = document.createElement('img');
            userImg.src = img;
            userImg.alt = "John Doe";
            userDiv.appendChild(userImg);
    
            const uniqueIdDiv = document.createElement('div');
            uniqueIdDiv.classList.add('unique_id');
            uniqueIdDiv.setAttribute('hidden', true);
            uniqueIdDiv.innerText = uid;
            userDiv.appendChild(uniqueIdDiv);
    
            const userInfoDiv = document.createElement('div');
            userInfoDiv.classList.add('user-info');
            userDiv.appendChild(userInfoDiv);
    
            const nameDiv = document.createElement('div');
            nameDiv.classList.add('name');
            nameDiv.innerText = firstName + " " + lastName;
            userInfoDiv.appendChild(nameDiv);
    
            const statusDiv = document.createElement('div');
            statusDiv.classList.add('status');
            statusDiv.innerText = status;
            userInfoDiv.appendChild(statusDiv);
        })
    

    } else {
        // server sent out an empty list
        console.log("No Online Friends");
    }
}


getOnlineFriends();

setInterval(getOnlineFriends, 5000);



// setInterval(() => {
//     let xmlhttp = new XMLHttpRequest();
//     xmlhttp.open("POST", "userlist.php", true);
//     xmlhttp.onreadystatechange = () => {
//         if (xmlhttp.readyState === XMLHttpRequest.DONE && xmlhttp.status === 200) {
//             let data = xmlhttp.response;
//             lu.innerHTML = data;
//         }
//     };
//     xmlhttp.send();
// }, 1000)

