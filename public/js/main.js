alert('witaj!');
// // const belt = document.createElement('div');
// // document.body.appendChild(belt);
// // let beltWidth = 5;// szerokość prostokąta
// // const beltHeight = 20;// wysokość prostokąta
// // belt.style.width = beltWidth +"%";
// // 100 + "px" ->"100" + "px" ->"100px"
// // belt.style.height = beltHeight +"px";
// // let grow = true;
// // let size = 100;
// // window.addEventListener("scroll",function(){
// //     size = size + 10;
// //     if (size ++)
// //     {
// //         grow = true
// //     //    grow = !grow //to również jest bardzo poprawny zapis
// //     }
// //     else if(size --){
// //         grow = false;
// //     }
// //     if(grow == true){
// //         size += 5

// //         belt.style.width = size + "px";
// //         }

// //         else{
// //             size -= 5

// //             ractangle.style.width = size + "px";
// //         }
// // })*/
// // const belt = document.createElement("div");
// // document.body.appendChild(belt);
// // let monitor = monitorScreen
// // winH = document.body.offsetHeight;
// // winS = window.sqrollY;
// // winO = document.body.scroll;
// // winS = `Twoja strona jest na wysokości :window.sqrollY`;
// // Reference: http://www.html5rocks.com/en/tutorials/speed/animations/

// //Pomiar strony
// // function myFunction() {
// //     console.log(`działa`);
// //     document.getElementsByTagName("body").innerHTML = x += 1;
// //   }
// // function getDocHeight() 
// // {
// //     var D = document;
// //     return Math.max(
// //         D.body.scrollHeight, D.documentElement.scrollHeight,
// //         D.body.offsetHeight, D.documentElement.offsetHeight,
// //         D.body.clientHeight, D.documentElement.clientHeight
// //     );
// // }
// //alert(getDocHeight());

let belt = document.createElement('div');
let beltPosition;

// const iH = window.innerHeight;
// document.body.addEventListener('scroll',()=>{
//     console.log('scroluje');
// })

document.body.appendChild(belt);


belt.style.height = "10px";
belt.style.backgroundColor = "#8b1010";
belt.style.position = "fixed";



// // function getDocHeight() {
// //     var D = document;
// //     return Math.max(
// //         D.body.scrollHeight, D.documentElement.scrollHeight,
// //         D.body.offsetHeight, D.documentElement.offsetHeight,
// //         D.body.clientHeight, D.documentElement.clientHeight
// //     );

// // }
window.addEventListener('scroll', (e) => {
    // belt.style.width = ((((scrollMaxY - scrollY) / scrollMaxY) * 100) / 100) + "%";

    console.log(scrollMaxY);
    // belt.style.width = "100" + "%";
    // console.log(100-(((((scrollMaxY - scrollY) / scrollMaxY) * 100))));
    belt.style.width= 100-(((((scrollMaxY - scrollY) / scrollMaxY) * 100)))+"%";
});