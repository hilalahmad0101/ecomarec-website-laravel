// $(function () {
//   // $("#header").load("./header2.html");

//   $(".card").load("./card.html");
//   $("#loginModal").load("./loginmodal.html");
//   $("#signUpModal").load("./signUpModal.html");

//   $(".card2").load("./card2.html");
// });

// const header = document.getElementById("header");
// const MobileHeader = document.getElementById("MobileHeader");
// const topheader = document.getElementById("topheader");
// const sideBar = document.getElementById("sideBar");
// const footer = document.getElementById("footer");
// const mobileFooter = document.getElementById("mobileFooter");
// const BottomFooter = document.getElementById("BottomFooter");
// const freedel = document.getElementById("freedel");
// const CattgoryCaurosal = document.querySelector(".CattgoryCaurosal");
// const megamenus = document.getElementById("megamenus");
// megamenus.innerHTML = `
// <div class="shadow bg-gray-50  xl:block hidden ">
// <nav
//   class="navbar navbar-expand-lg py-2 container mx-auto relative flex items-center w-full justify-between"
// >
//   <div class="px-6">
//     <button
//       class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out"
//       type="button"
//       data-bs-toggle="collapse"
//       data-bs-target="#navbarSupportedContentY"
//       aria-controls="navbarSupportedContentY"
//       aria-expanded="false"
//       aria-label="Toggle navigation"
//     >
//       <svg
//         aria-hidden="true"
//         focusable="false"
//         data-prefix="fas"
//         class="w-5"
//         role="img"
//         xmlns="http://www.w3.org/2000/svg"
//         viewBox="0 0 448 512"
//       >
//         <path
//           fill="currentColor"
//           d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
//         ></path>
//       </svg>
//     </button>
//     <div
//       class="navbar-collapse collapse grow items-center"
//       id="navbarSupportedContentY"
//     >
//       <ul class="navbar-nav mr-auto flex space-x-12 flex-row">
//         <li class="nav-item">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-700 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
//             href="#!"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             >TVs & Appliances
//             </a
//           >
//         </li>
//         <li class="nav-item">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-700 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
//             href="#!"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             >Baby & Kids
//             </a
//           >
//         </li>
//         <li class="nav-item">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-700 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
//             href="#!"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             >Home & Furniture</a
//           >
//         </li>
//         <li class="nav-item dropdown static">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out dropdown-toggle flex items-center whitespace-nowrap"
//             href="#"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             type="button"
//             id="dropdownMenuButtonY"
//             data-bs-toggle="dropdown"
//             aria-expanded="false"
//             >Sports, Books & More

//             <svg
//               aria-hidden="true"
//               focusable="false"
//               data-prefix="fas"
//               data-icon="caret-down"
//               class="w-2 ml-2"
//               role="img"
//               xmlns="http://www.w3.org/2000/svg"
//               viewBox="0 0 320 512"
//             >
//               <path
//                 fill="currentColor"
//                 d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
//               ></path>
//             </svg>
//           </a>
//           <div
//             class="dropdown-menu w-full mt-0 hidden shadow-lg bg-white absolute left-0 top-full"
//             aria-labelledby="dropdownMenuButtonY"
//           >
//             <div class="px-6 lg:px-8 py-5">
//               <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Lorem ipsum
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Dolor sit</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Amet consectetur</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cras justo odio</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Adipisicing elit</a
//                   >
//                 </div>
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Explit voluptas
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Perspiciatis quo</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cras justo odio</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Laudant maiores</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Provident dolor</a
//                   >
//                 </div>
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Iste quaerato
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cras justo odio</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Est iure</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Praesentium</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Laboriosam</a
//                   >
//                 </div>
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Cras justo odio
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Saepe</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Vel alias</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Sunt doloribus</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cum dolores</a
//                   >
//                 </div>
//               </div>
//             </div>
//           </div>
//         </li>
//         <li class="nav-item">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-700 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
//             href="#!"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             >Flights</a
//           >
//         </li>
//         <li class="nav-item dropdown static">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out dropdown-toggle flex items-center whitespace-nowrap"
//             href="#"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             type="button"
//             id="dropdownMenuButtonY"
//             data-bs-toggle="dropdown"
//             aria-expanded="false"
//             >Mega menu
//             <svg
//               aria-hidden="true"
//               focusable="false"
//               data-prefix="fas"
//               data-icon="caret-down"
//               class="w-2 ml-2"
//               role="img"
//               xmlns="http://www.w3.org/2000/svg"
//               viewBox="0 0 320 512"
//             >
//               <path
//                 fill="currentColor"
//                 d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
//               ></path>
//             </svg>
//           </a>
//           <div
//             class="dropdown-menu w-full mt-0 hidden shadow-lg bg-white absolute left-0 top-full"
//             aria-labelledby="dropdownMenuButtonY"
//           >
//             <div class="px-6 lg:px-8 py-5">
//               <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Lorem ipsum
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Dolor sit</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Amet consectetur</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cras justo odio</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Adipisicing elit</a
//                   >
//                 </div>
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Explit voluptas
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Perspiciatis quo</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cras justo odio</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Laudant maiores</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Provident dolor</a
//                   >
//                 </div>
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Iste quaerato
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cras justo odio</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Est iure</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Praesentium</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Laboriosam</a
//                   >
//                 </div>
//                 <div class="bg-white text-gray-600">
//                   <p
//                     class="block px-6 py-2 border-b border-gray-200 w-full uppercase font-semibold text-gray-700"
//                   >
//                     Cras justo odio
//                   </p>
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Saepe</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Vel alias</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Sunt doloribus</a
//                   >
//                   <a
//                     href="#!"
//                     aria-current="true"
//                     class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out"
//                     >Cum dolores</a
//                   >
//                 </div>
//               </div>
//             </div>
//           </div>
//         </li>
//         <li class="nav-item">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-700 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
//             href="#!"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             >Home & Furniture</a
//           >
//         </li>
//         <li class="nav-item">
//           <a
//             class="nav-link block pr-2 lg:px-2 py-2 text-gray-700 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out"
//             href="#!"
//             data-mdb-ripple="true"
//             data-mdb-ripple-color="light"
//             >Home & Furniture</a
//           >
//         </li>
//       </ul>
//     </div>
//   </div>
// </nav>
// </div>
// `;

// freedel.innerHTML = `  
// <div class="bg-blue-600">
// <div
//   class="py-5 grid grid-cols-5 lg:grid-cols-5 container mx-auto mx-auto flex items-center"
// >
//   <div
//     class="flex lg:flex-row md:space-x-5 md:space-x-5 flex-col items-center text-center justify-center border-gray-100 lg:border-r-2 border-r-2 my-5"
//   >
//     <div class="flex justify-center">
//       <i class="fas fa-truck mx-auto text-white md:text-4xl text-2xl"></i>
//     </div>
//     <div class="">
//       <h4 class="text-white md:text-md text-xsm font-semibold my-1">
//         FREE DELIVERY
//       </h4>
//       <p class="text-white md:text-base text-xxs font-light">
//         From 275 AED
//       </p>
//     </div>
//   </div>
//   <div
//     class="flex px-2 lg:flex-row md:space-x-5 flex-col items-center text-center justify-center border-gray-100 lg:border-r-2 border-r-2"
//   >
//     <div class="my-auto">
//       <i
//         class="far fa-money-bill-alt text-white md:text-4xl text-2xl"
//       ></i>
//     </div>
//     <div class="my-auto">
//       <h4 class="text-white md:text-md text-xsm font-semibold mb-2">
//         CASH ON DELIVERY
//       </h4>
//       <p class="text-white text-xxs font-light">From 275 AED</p>
//     </div>
//   </div>
//   <div
//     class="flex px-2 align-centerg-9 lg:flex-row md:space-x-5 justify-center flex-col items-center text-center border-gray-100 lg:border-r-2 border-r-2"
//   >
//     <div class="">
//       <i class="fas fa-gift text-white md:text-4xl text-2xl"></i>
//     </div>
//     <div class="">
//       <h4 class="text-white md:text-md text-xsm font-semibold mb-1">
//         FREE GIFT BOX
//       </h4>
//       <p class="text-white text-xxs font-light">& Gift Note</p>
//     </div>
//   </div>
//   <div
//     class="flex px-2 lg:flex-row md:space-x-5 flex-col items-center text-center justify-center align-centerg-9 border-gray-100 lg:border-r-2 border-r-2"
//   >
//     <div class="">
//       <i
//         class="fas fa-phone-square-alt text-white md:text-4xl text-2xl"
//       ></i>
//     </div>
//     <div class="">
//       <h4 class="text-white md:text-md text-xsm font-semibold mb-1">
//         CONTACT US
//       </h4>
//       <p class="text-white text-xxs font-light">123 456 789</p>
//     </div>
//   </div>

//   <div
//     class="flex lg:flex-row md:space-x-5 justify-center flex-col items-center text-center px-2 align-center mx-auto g-9"
//   >
//     <div class="">
//       <i
//         class="fa-regular fa-gem text-white md:md:text-4xl text-2xl text-2xl"
//       ></i>
//     </div>
//     <div class="">
//       <h4 class="text-white md:text-md text-xsm font-semibold mb-1">
//         LOYALTY
//       </h4>
//       <p class="text-white text-xxs font-light">Rewarded</p>
//     </div>
//   </div>
// </div>
// </div>

// `;
// BottomFooter.innerHTML = ` <div class="bg-blue-600 p-3 ">
// <div class="text-center flex justify-center flex-col items-center">
//   <p class="md:mb-4 mb-2  text-xs md:text-sm text-white">
//     ©2021 WordPress Theme SW Revo. All Rights Reserved. Designed by
//     WPThemeGo.Com.
//   </p>
//   <div>
//     <img
//       src="https://demo.wpthemego.com/themes/sw_revo/wp-content/uploads/2016/09/paypel.png"
//       alt=""
//       class="w-96 text-center"
//     />
//   </div>
// </div>
// </div>`;
// footer.innerHTML = `
// <div class=" bg-custome-100  md:block hidden ">

// <footer class="container mx-auto lg:px-12 px-0 ">
//   <div class="grid md:grid-cols-4 grid-cols-2 gap-1 py-24 px-6 lg:grid-cols-6">
//     <div>
//       <h2
//         class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400"
//       >
//         Company
//       </h2>
//       <ul class="text-gray-500 dark:text-gray-400">
//         <li class="md:mb-4 mb-2">
//           <a href="about.html" class="hover:underline text-xs  md:text-base">About</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="contact-us.html" class="hover:underline text-xs  md:text-base">Contact us</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Brand Center</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="account.html" class="hover:underline text-xs  md:text-base">Account</a>
//         </li>
//       </ul>
//     </div>
//     <div>
//       <h2
//         class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400"
//       >
//         Company
//       </h2>
//       <ul class="text-gray-500 dark:text-gray-400">
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">About</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Careers</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Brand Center</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Blog</a>
//         </li>
//       </ul>
//     </div>
//     <div>
//       <h2
//         class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400"
//       >
//         Help center
//       </h2>
//       <ul class="text-gray-500 dark:text-gray-400">
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Discord Server</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Twitter</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Facebook</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Contact Us</a>
//         </li>
//       </ul>
//     </div>
//     <div>
//       <h2
//         class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400"
//       >
//         Legal
//       </h2>
//       <ul class="text-gray-500 dark:text-gray-400">
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Privacy Policy</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Licensing</a>
//         </li>
//         <li class="md:mb-4 mb-2">
//           <a href="#" class="hover:underline text-xs  md:text-base">Terms &amp; Conditions</a>
//         </li>
//       </ul>
//     </div>
//     <div class="col-span-2">
//       <h2
//         class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400"
//       >
//       CONTACT US
//       </h2>
//       <ul class="text-gray-500 dark:text-gray-400 ">
//         <li class="md:mb-4 mb-2">
//             <div class="flex space-x-4">
//             <div class="w-10 h-10 justify-center flex items-center  text-center rounded-full bg-blue-600 "><i class="fa-solid fa-envelope  text-white"></i></div>
//           <a href="#" class="hover:underline text-xs  md:text-base"> Address : No 40 Baria Sreet 133/2 NewYork City,
//              </a>
//         </div>
//         </li>
//         <li class="md:mb-4 mb-2">
//             <div class="flex space-x-4">
//             <div class="w-10 h-10 justify-center  text-center rounded-full bg-blue-600 "><i class="fa-solid fa-mobile-button mt-3 text-white"></i></div>
//           <a href="#" class="hover:underline text-xs  md:text-base">  0123456789 <br>
//             </a>
//         </div>
//         </li>
//         <li class="md:mb-4 mb-2">
//             <div class="flex space-x-4">
//             <div class="w-10 h-10 justify-center  flex items-center text-center rounded-full bg-blue-600 "><i class=" text-white fa-solid  fa-location-pin"></i></div>
//           <a href="#" class="hover:underline text-xs  md:text-base"> Email : contact@Revoshop.com </a>
//         </div>
//         </li>
    
//       </ul>
//     </div>
//   </div>
  


// </footer>
// </div>
// `;
// mobileFooter.innerHTML= `
// <div class="bg-custome-100 md:hidden block">
// <div class="accordion" id="accordionExample">

//   <div class="accordion-item border border-gray-200">
//     <h2 class="accordion-header mb-0" id="headingTwo">
//       <button
//         class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
//         type="button"
//         data-bs-toggle="collapse"
//         data-bs-target="#collapseTwo"
//         aria-expanded="false"
//         aria-controls="collapseTwo"
//       >
//         Legal
//       </button>
//     </h2>
//     <div
//       id="collapseTwo"
//       class="accordion-collapse collapse"
//       aria-labelledby="headingTwo"
//       data-bs-parent="#accordionExample"
//     >
//       <div class="accordion-body py-4 px-5">
//         <ul class="text-gray-500 dark:text-gray-400">
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Privacy Policy</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Licensing</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Terms &amp; Conditions</a
//             >
//           </li>
//         </ul>
//       </div>
//     </div>
//   </div>
//   <div class="accordion-item border border-gray-200">
//     <h2 class="accordion-header mb-0" id="headingThree">
//       <button
//         class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
//         type="button"
//         data-bs-toggle="collapse"
//         data-bs-target="#collapseThree"
//         aria-expanded="false"
//         aria-controls="collapseThree"
//       >
//         Pages
//       </button>
//     </h2>
//     <div
//       id="collapseThree"
//       class="accordion-collapse collapse"
//       aria-labelledby="headingThree"
//       data-bs-parent="#accordionExample"
//     >
//       <div class="accordion-body py-4 px-5">
//         <ul class="text-gray-500 dark:text-gray-400">
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >About</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Careers</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Brand Center</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Blog</a
//             >
//           </li>
//         </ul>
//       </div>
//     </div>
//   </div>
//   <div class="accordion-item border border-gray-200">
//     <h2 class="accordion-header mb-0" id="headingfour">
//       <button
//         class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
//         type="button"
//         data-bs-toggle="collapse"
//         data-bs-target="#collapsefour"
//         aria-expanded="false"
//         aria-controls="collapsefour"
//       >
//         Contact Us
//       </button>
//     </h2>
//     <div
//       id="collapsefour"
//       class="accordion-collapse collapse"
//       aria-labelledby="headingfour"
//       data-bs-parent="#accordionExample"
//     >
//       <div class="accordion-body py-4 px-5">
//         <ul class="text-gray-500 dark:text-gray-400">
//           <li class="md:mb-4 mb-2">
//             <div class="flex space-x-4">
//               <div
//                 class="w-10 h-10 justify-center flex items-center text-center rounded-full bg-blue-600"
//               >
//                 <i class="fa-solid fa-envelope text-white"></i>
//               </div>
//               <a href="#" class="hover:underline text-xs md:text-base">
//                 Address : No 40 Baria Sreet 133/2 NewYork City,
//               </a>
//             </div>
//           </li>
//           <li class="md:mb-4 mb-2">
//             <div class="flex space-x-4">
//               <div
//                 class="w-10 h-10 justify-center text-center rounded-full bg-blue-600"
//               >
//                 <i class="fa-solid fa-mobile-button mt-3 text-white"></i>
//               </div>
//               <a href="#" class="hover:underline text-xs md:text-base">
//                 0123456789 <br />
//               </a>
//             </div>
//           </li>
//           <li class="md:mb-4 mb-2">
//             <div class="flex space-x-4">
//               <div
//                 class="w-10 h-10 justify-center flex items-center text-center rounded-full bg-blue-600"
//               >
//                 <i class="text-white fa-solid fa-location-pin"></i>
//               </div>
//               <a href="#" class="hover:underline text-xs md:text-base">
//                 Email : contact@Revoshop.com
//               </a>
//             </div>
//           </li>
//         </ul>
//       </div>
//     </div>
//   </div>
//   <div class="accordion-item border border-gray-200">
//     <h2 class="accordion-header mb-0" id="headingfour">
//       <button
//         class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-xs text-blue-900 text-left font-extrabold capitalize border-0 rounded-none transition focus:outline-none"
//         type="button"
//         data-bs-toggle="collapse"
//         data-bs-target="#collapsefive"
//         aria-expanded="false"
//         aria-controls="collapsefive"
//       >
//         Help Center
//       </button>
//     </h2>
//     <div
//       id="collapsefive"
//       class="accordion-collapse collapse"
//       aria-labelledby="headingfive"
//       data-bs-parent="#accordionExample"
//     >
//       <div class="accordion-body py-4 px-5">
//         <ul class="text-gray-500 dark:text-gray-400">
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Discord Server</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Twitter</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Facebook</a
//             >
//           </li>
//           <li class="md:mb-4 mb-2">
//             <a href="#" class="hover:underline text-xs md:text-base"
//               >Contact Us</a
//             >
//           </li>
//         </ul>
//       </div>
//     </div>
//   </div>
// </div>
// </div>
// `
// // header and side bar code
// header.innerHTML = `



// <!-- //header box -->


// <div class="bg-white shadow transition-all  ">

// <nav
//   class="container mx-auto lg:flex hidden space-x-6 items-center p-5 justify-center"
// >
//   <a href="index.html" class="">
//     <img
//       src="./images/logo2.png"
//       class="mr-3 h-12 sm:h-7"
//       alt="Flowbite Logo"
//     />
//   </a>

//   <form class="flex items-center">
//     <label for="simple-search" class="sr-only">Search</label>
//     <div class="relative w-full">
//       <div
//         class="flex absolute inset-y-0 right-5 items-center pl-3 pointer-events-none"
//       >
//         <svg
//           aria-hidden="true"
//           class="w-5 h-5 text-gray-500 dark:text-gray-400"
//           fill="currentColor"
//           viewBox="0 0 20 20"
//           xmlns="http://www.w3.org/2000/svg"
//         >
//           <path
//             fill-rule="evenodd"
//             d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
//             clip-rule="evenodd"
//           ></path>
//         </svg>
//       </div>
//       <input
//         type="text"
//         id="simple-search"
//         class="w-full xl:w-550 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
//         placeholder="Search Itmes"
//         required=""
//       />
//     </div>
//   </form>
//   <a
//     href="./seller.html"
//     class="block py-2 pr-4 pl-3 text-blue-800 font-medium text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
//     >Become a Seller
//   </a>

//   <li class="list-none">
//     <button
//       id="mega-menu-dropdown-button"
//       data-dropdown-toggle="mega-menu-dropdown"
//       class="flex justify-between items-center text-blue-800 font-medium text-lg py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
//     >
//       More
//       <svg
//         aria-hidden="true"
//         class="ml-1 w-5 h-5 md:w-4 md:h-4"
//         fill="currentColor"
//         viewBox="0 0 20 20"
//         xmlns="http://www.w3.org/2000/svg"
//       >
//         <path
//           fill-rule="evenodd"
//           d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
//           clip-rule="evenodd"
//         ></path>
//       </svg>
//     </button>
//     <div
//       id="mega-menu-dropdown"
//       class="grid hidden absolute z-30 grid-cols-2 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700"
//     >
//       <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
//         <ul
//           class="space-y-4"
//           aria-labelledby="mega-menu-dropdown-button"
//         >
//           <li>
//             <a
//               href="about.html"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               About Us
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Library
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Resources
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Pro Version
//             </a>
//           </li>
//         </ul>
//       </div>
//       <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
//         <ul class="space-y-4">
//           <li>
//             <a
//               href="account.html"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Account
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Newsletter
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Playground
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               License
//             </a>
//           </li>
//         </ul>
//       </div>
//       <div class="p-4 text-gray-900 dark:text-white">
//         <ul class="space-y-4">
//           <li>
//             <a
//               href="contact-us.html"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Contact Us
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Support Center
//             </a>
//           </li>
//           <li>
//             <a
//               href="#"
//               class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500"
//             >
//               Terms
//             </a>
//           </li>
//         </ul>
//       </div>
//     </div>
//   </li>

//   <a
//     href=""
//     data-bs-toggle="modal"
//     data-bs-target="#exampleModalScrollable2"
//     class="text-blue-800 py-2 rounded-md text-lg font-medium"
//     aria-current="page"
//     >Login
//   </a>
//   <button
//     type="button"
//     data-bs-toggle="modal"
//     data-bs-target="#exampleModalScrollable"
//     class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-full text-sm px-6 py-2.5 text-center mr-2 mb-2"
//   >
//     Sign Up
//   </button>

//   <div>
//     <button
//       type="button"
//       class="inline-flex relative items-center text-sm font-medium text-center text-white bg-white rounded-lg  "
//     >
//       <i class="fa-solid fa-cart-shopping text-blue-900 text-2xl"></i>

//       <span class="sr-only">Notifications</span>
//       <div
//         class="inline-flex absolute -top-3 -right-4 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900"
//       >
//         20
//       </div>
//     </button>
//     <button
//       type="button"
//       class="inline-flex relative items-center mx-4 text-sm font-medium text-center text-white bg-white rounded-lg   focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
//     >
//       <i class="fa-solid fa-heart focus:text-white text-blue-900 text-2xl"></i>

//       <span class="sr-only">Whishlist</span>
//       <div
//         class="inline-flex absolute -top-3 -right-4 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900"
//       >
//         20
//       </div>
//     </button>
//   </div>
// </nav>
// </div>


// `;

// MobileHeader.innerHTML = `

// <div
//   class="flex lg:hidden justify-between w-full sm:justify-around px-4 py-5"
// >
//   <div class="flex space-x-2">
//     <div
//       data-drawer-target="drawer-navigation"
//       data-drawer-show="drawer-navigation"
//       aria-controls="drawer-navigation"
//       class="w-9 h-9 lg:hidden flex justify-center items-center rounded bg-custome-100"
//     >
//       <i class="fa-solid fa-bars"></i>
//     </div>
//     <a href="index.html" class="">
//       <img
//         src="./images/logo2.png"
//         class="mr-3 h-9 sm:h-7"
//         alt="Flowbite Logo"
//       />
//     </a>
//   </div>

//   <div class="flex space-x-5 ">
//     <button
//       type="button"
//       class="inline-flex relative items-center text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
//     >
//       <i class="fa-solid fa-cart-shopping text-blue-900 text-2xl"></i>

//       <span class="sr-only">Notifications</span>
//       <div
//         class="inline-flex absolute -top-1 -right-3 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900"
//       >
//         20
//       </div>
//     </button>
//     <button
//       type="button"
//       class="inline-flex relative items-center mx-4 text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
//     >
//       <i class="fa-solid fa-heart text-blue-900 text-2xl"></i>

//       <span class="sr-only">Whishlist</span>
//       <div
//         class="inline-flex absolute -top-1 -right-3 justify-center items-center w-5 h-5 text-xxs font-bold text-white bg-red-500 rounded-full dark:border-gray-900"
//       >
//         20
//       </div>
//     </button>
//   </div>
// </div>


// <div class="bg-white  pb-2">
//   <div class="sm:mx-0 mx-3 lg:hidden block flex justify-center">
//     <form class="items-center sm:w-3/5 w-full">
//       <label for="simple-search" class="sr-only">Search</label>
//       <div class="relative w-full">
//         <div
//           class="flex absolute inset-y-0 right-5 items-center pointer-events-none"
//         >
//           <svg
//             aria-hidden="true"
//             class="w-5 h-5 text-gray-500 dark:text-gray-400"
//             fill="currentColor"
//             viewBox="0 0 20 20"
//             xmlns="http://www.w3.org/2000/svg"
//           >
//             <path
//               fill-rule="evenodd"
//               d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
//               clip-rule="evenodd"
//             ></path>
//           </svg>
//         </div>
//         <input
//           type="text"
//           id="simple-search"
//           class="w-full xl:w-550 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
//           placeholder="Search Itmes"
//           required=""
//         />
//       </div>
//     </form>
//   </div>
// </div>



// `

// sideBar.innerHTML= 
// `
// <!-- ///side bar -->

// <div
// id="drawer-navigation"
// class="fixed z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800"
// tabindex="-1"
// aria-labelledby="drawer-navigation-label"
// >
// <h5
//   id="drawer-navigation-label"
//   class="md:text-md text-sm font-bold text-blue-800 uppercase dark:text-blue-800"
// >
//   Menu
// </h5>
// <button
//   type="button"
//   data-drawer-dismiss="drawer-navigation"
//   aria-controls="drawer-navigation"
//   class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
// >
//   <svg
//     aria-hidden="true"
//     class="w-5 h-5"
//     fill="currentColor"
//     viewBox="0 0 20 20"
//     xmlns="http://www.w3.org/2000/svg"
//   >
//     <path
//       fill-rule="evenodd"
//       d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
//       clip-rule="evenodd"
//     ></path>
//   </svg>
//   <span class="sr-only">Close menu</span>
// </button>
// <div class="py-4 overflow-y-auto">
//   <ul class="space-y-2">
//     <li>
//       <a
//         href="seller.html"
//         class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
//       >
//         <!-- <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg> -->
//         <i class="fa-solid fa-bag-shopping"></i>
//         <span class="ml-3">Become a Seller</span>
//       </a>
//     </li>
//     <li>
//       <button
//         type="button"
//         class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
//         aria-controls="dropdown-example"
//         data-collapse-toggle="dropdown-example"
//       >
//         <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg> -->
//         <i class="fa-regular fa-circle-down"></i>
//         <span class="flex-1 ml-3 text-left whitespace-nowrap"
//           >More
//         </span>
//       </button>
//       <ul id="dropdown-example" class="hidden py-2 space-y-2">
//         <li>
//           <a
//             href="about.html"
//             class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
//             >About US</a
//           >
//         </li>
//         <li>
//           <a
//             href="contact-us.html"
//             class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
//             >Contact Us</a
//           >
//         </li>
//         <li>
//           <a
//             href="#"
//             class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
//             >Invoice</a
//           >
//         </li>
//       </ul>
//     </li>
//     <li>
//       <a
//         href="#"
//         class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
//       >
//         <i class="fa-solid fa-globe"></i>
//         <span class="flex-1 ml-3 whitespace-nowrap"
//           >Choose Language</span
//         >
//       </a>
//     </li>
//     <li>
//       <a
//         href="notification.html"
//         class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
//       >
//         <i class="fa-solid fa-bell"></i>
//         <span class="flex-1 ml-3 whitespace-nowrap">Notifications</span>
//         <span
//           class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200"
//           >3</span
//         >
//       </a>
//     </li>
//     <li>
//       <a
//         href="accountSetting.html"
//         class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
//       >
//         <svg
//           aria-hidden="true"
//           class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
//           fill="currentColor"
//           viewBox="0 0 20 20"
//           xmlns="http://www.w3.org/2000/svg"
//         >
//           <path
//             fill-rule="evenodd"
//             d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
//             clip-rule="evenodd"
//           ></path>
//         </svg>
//         <span class="flex-1 ml-3 whitespace-nowrap">Account</span>
//       </a>
//     </li>

//     <li>
//       <a
//       data-bs-toggle="modal"
//       data-bs-target="#exampleModalScrollable2"
//         href="#"
//         class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
//       >
//         <svg
//           aria-hidden="true"
//           class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
//           fill="currentColor"
//           viewBox="0 0 20 20"
//           xmlns="http://www.w3.org/2000/svg"
//         >
//           <path
//             fill-rule="evenodd"
//             d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
//             clip-rule="evenodd"
//           ></path>
//         </svg>
//         <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
//       </a>
//     </li>
//     <li>
//       <a
//         href="#"
//         data-bs-toggle="modal"
//         data-bs-target="#exampleModalScrollable"
//         class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
//       >
//         <svg
//           aria-hidden="true"
//           class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
//           fill="currentColor"
//           viewBox="0 0 20 20"
//           xmlns="http://www.w3.org/2000/svg"
//         >
//           <path
//             fill-rule="evenodd"
//             d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
//             clip-rule="evenodd"
//           ></path>
//         </svg>
//         <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
//       </a>
//     </li>
//   </ul>
// </div>
// </div>


// `
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: false,
  breakpoints: {
    450: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
    },
    1240: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1440: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var BrandSwiper = new Swiper(".BrandSwiper", {
  slidesPerView: 4,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: false,
  breakpoints: {
    450: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 6,
    },
    1240: {
      slidesPerView: 7,
      spaceBetween: 0,
    },
    1440: {
      slidesPerView: 7,
      spaceBetween: 50,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var discountCatgory = new Swiper(".discountCatgory", {
  slidesPerView: 2,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: false,
  breakpoints: {
 
    1240: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1440: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".catSwiper", {
  slidesPerView: 5,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  breakpoints: {
 
    500: {
      slidesPerView: 5,
    },
    640: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 6,
    },
    1000: {
      slidesPerView: 7,
      spaceBetween: 0,
    },
    1240: {
      slidesPerView: 10,
      spaceBetween: 0,
    },
  },
  loopFillGroupWithBlank: true,
  pagination: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".proSwiper", {
  slidesPerView: 2,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  breakpoints: {

    500: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    800: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
    1000: {
      slidesPerView: 4,
      spaceBetween: 0,
    },
    1208: {
      slidesPerView: 5,
      spaceBetween: 0,
    },
  },
  pagination: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".brandSwiper", {
  slidesPerView: 7,
  spaceBetween: 0,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

