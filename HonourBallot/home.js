

const counters=document.querySelectorAll('.odometer');
const speed =1000;

counters.forEach(counter =>{
  const updateCount = () =>{
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;

    const inc= target/speed;

    if(count<target){
      counter.innerText = Math.ceil(count+inc);
      setTimeout(updateCount,1);
    }else{
      count.innerText=target;
    }
  }
  updateCount();
});

// Function to hide the content after a specified time (in milliseconds)
function hideContentAfterTime(time) {
  setTimeout(function() {
      document.getElementById("scontent").style.display = "none";
  }, time);
}

// Call the function with the desired time (in milliseconds)
hideContentAfterTime(5000); // Hide content after 5 seconds (5000 milliseconds)
