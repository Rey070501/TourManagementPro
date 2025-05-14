<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<link href="homepage.css" rel="stylesheet" />
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home Page</title>
</head>
<body>
<nav class="navbar" id="navBarHome" style="display:block;">
<div class="navdiv">
<ul>
<li><h1>Tour Management</h1></li>
<li>Home</li>
<li>About</li>
<li>Contact</li>
<li>Logout</li>
</ul>
</div>
</nav>
<br>
<div class="container" id="PlaceCards" name="PlaceCards" style="display:block;">

<h2>Places</h2>

<ul>

<li>

<div class="card">

<img src="https://th.bing.com/th/id/OIP.oQhmPlAbnDyxGisLRkQiKwHaE8?w=349&h=190&c=7&r=0&o=5&cb=iwc1&dpr=1.3&pid=1.7" alt="London" width="250" height="250">

<h2>GOA</h2>

<button type="button" class="btn btn-primary" id="GoaDetails" >Details</button>
</div>
</li>
<li>

<div class="card">

<img src="https://th.bing.com/th/id/OIP.jZdEE0wsnvu7VJHy7DF8fwHaEV?w=279&h=180&c=7&r=0&o=5&cb=iwc1&dpr=1.3&pid=1.7" alt="London" width="250" height="250">

<h2>Agra</h2>

<button type="button" class="btn btn-primary" id="AgraDetails" name="AgraDetails">Details</button>

</div>

</li>

<li>

<div class="card">

<img src="https://th.bing.com/th/id/OIP.zNMz5uGS0dZdeSj6pDH9DgHaE8?w=264&h=180&c=7&r=0&o=5&cb=iwc1&dpr=1.3&pid=1.7" alt="London" width="250" height="250">

<h2>Jaipur</h2>

<button type="button" class="btn btn-primary" id="JaipurDetails" >Details</button>

</div>

</li>

<li>

<div class="card">

<img src="https://image3.mouthshut.com/images/imagesp/925747858s.jpg" alt="London" width="250" height="250">

<h2>Delhi</h2>

<button type="button" class="btn btn-primary" id="DelhiDetail">Details</button>

</div>

</li>

<li>

<div class="card">

<img src="https://www.mistay.in/travel-blog/content/images/2021/07/Roam-around-7-Historcial-Monuments-of-Mumbai--Gateway-of-India-I-Mistay.jpeg" alt="London" width="250" height="250">

<h2>Mumbai</h2>

<button type="button" class="btn btn-primary" id="MumbaiDetails">Details</button>

</div>

</li>

<li>
<div class="card">

<img src="https://th.bing.com/th/id/R.d4b982dc0b9b3b2bf598df85cca53b04?rik=A%2bdvghH3SSORjg&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fcqmpGqQ.jpg&ehk=7bCV%2bNwXKVo2KV8ugI%2fzAK4ltNIoYFntxYUgZZtYYPE%3d&risl=&pid=ImgRaw&r=0" alt="London" width="250" height="250">

<h2>Kerala</h2>

<button type="button" class="btn btn-primary" id="KeralaDetails" >Details</button>

</div>

</li>


<li>
<div class="card">

<img src="https://www.tripsavvy.com/thmb/KUwskT-R3LpyTVl-AV6i7SHExpQ=/3620x2398/filters:fill(auto,1)/_DSC0552-56a3bfde3df78cf7727f02f1.JPG" alt="London" width="250" height="250">

<h2>TamilNadu</h2>

<button type="button" class="btn btn-primary" id="TamilDetails">Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://wallpaperaccess.com/full/1547026.jpg" alt="London" width="250" height="250">

<h2>Kashmir</h2>

<button type="button" class="btn btn-primary" id="KashmirDetails">Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://blog.redbus.in/wp-content/uploads/2024/03/historical-places-in-Andhra-Pradesh-850x478.png" alt="London" width="250" height="250">

<h2>Andra-Pradesh</h2>

<button type="button" class="btn btn-primary" id="TeluguDetails">Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://www.kstdc.co/wp-content/uploads/2019/10/b3d.jpg" alt="London" width="250" height="250">

<h2>Karnataka</h2>

<button type="button" class="btn btn-primary" id="KarDetails">Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://imgcld.yatra.com/ytimages/image/upload/v1438930398/Kathmandu_4.jpg" alt="London" width="250" height="250">

<h2>Nepal</h2>

<button type="button" class="btn btn-primary" id="NepalDetails" >Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://th.bing.com/th/id/R.a012d73b00e8d94b92acf5d1deb80718?rik=zNuNaEEH6wNXyQ&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2fa%2f3%2f2%2f1050688-punjab-wallpapers-1920x1080-hd-1080p.jpg&ehk=ee14DZlRsezzCc3P9j8N%2bYC6l%2bZqtxM2hyFk7ERDqvo%3d&risl=&pid=ImgRaw&r=0" alt="London" width="250" height="250">

<h2>Punjab</h2>

<button type="button" class="btn btn-primary" id="PunjabDetails">Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://1.bp.blogspot.com/-vBQpsggBHX4/XcKRTqp9xWI/AAAAAAAAAE0/4cAd5YyLYmghSmfhBI0zWwuJ7wqs9H5wwCLcBGAsYHQ/s1600/beauty.jpg" alt="London" width="250" height="250">

<h2>Ladakh</h2>

<button type="button" class="btn btn-primary" id="LadDetails" >Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://www.tripsavvy.com/thmb/uswH65VtnkxOFGy6LYu4EZ0mEew=/2121x1414/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-467031976-5c8daa2146e0fb0001f8d053.jpg" alt="London" width="250" height="250">

<h2>Odisha</h2>

<button type="button" class="btn btn-primary" id="OdiDetails">Details</button>

</div>

</li>
<li>
<div class="card">

<img src="https://www.worldatlas.com/r/w1200/upload/58/75/14/shutterstock-704213116.jpg" alt="London" width="250" height="250">

<h2>Bangaladesh</h2>

<button type="button" class="btn btn-primary" id="BangDetails">Details</button>

</div>

</li>

<li>
<div class="card">

<img src="https://www.tripsavvy.com/thmb/saOZewSddzwrte1JZ3VFkzVhT5A=/2123x1412/filters:fill(auto,1)/GettyImages-133969846-596da35068e1a200112a3e89.jpg" alt="London" width="250" height="250">

<h2>Butan</h2>

<button type="button" class="btn btn-primary" id="ButDetails">Details</button>

</div>

</li>

</ul>

</div>
<br>
<div class="container" id="GOA" >
    <ul>
   <li><img src="https://th.bing.com/th/id/OIP.oQhmPlAbnDyxGisLRkQiKwHaE8?w=349&h=190&c=7&r=0&o=5&cb=iwc1&dpr=1.3&pid=1.7" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>GOA</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: North Goa - Beaches and Nightlife</b></div>
      <ul>Morning:   Relax on Baga Beach, known for its golden sands, lively shacks, and active night markets.</ul>
      <ul>Afternoon: Visit Anjuna Beach, offering a serene environment with affordable water sports. </ul>
      <ul>Evening:   Enjoy the vibrant nightlife in Baga or Calangute. </ul>
      <ul>Optional:  Explore Chapora Fort for stunning views and a sunset experience. </ul>
      <div class="fw-bold"><b>Day 2: North Goa - History and Culture</b> </div>
      <ul>Morning:   Explore Old Goa, historic churches like Basilica of Bom Jesus & Church of St. Catherine.</ul>
      <ul>Afternoon: Visit Mangueshi Temple and Panjim Church, experiencing Goa's cultural heritage.</ul>
      <ul>Evening:   Indulge in the vibrant atmosphere of Panjim Market and enjoy a Mandovi River sunset.</ul>
      <div class="fw-bold"><b>Day 3: South Goa - Relaxation and Serenity</b> </div>
      <ul>Morning:   Head to Palolem Beach, a serene spot with golden sands, gentle waves, and a relaxed vibe.</ul>
      <ul>Afternoon: Enjoy water sports, sea life spotting, and dining at the numerous beach shacks.</ul>
      <ul>Evening:   Relax by the beach, enjoy a sunset, or explore the local markets.</ul>
      <div class="fw-bold"><b>Day 4: South Goa - Beaches and Relaxation  </b></div>
     <ul> Morning:   Visit Calangute Beach called "Queen of Beaches" with many shacks & dining options.</ul>
      <ul>Afternoon: Explore Candolim Beach, offering a peaceful environment with extended beaches.</ul>
      <ul>Evening:   Relax on the beach, enjoy a sunset, or explore the local markets.</ul>
      <div class="fw-bold"><b>Day 5: South Goa - Optional Activities and Departure </b> </div>
      <ul>Morning:   Explore the Goa Chitra Museum or the Big Foot Museum for a glimpse into Goan history.</ul>
      <ul>Afternoon: Visit Margao Market or Colva Beach Market for some shopping.</ul>
      <ul>Evening:   Enjoy a final meal at one of South Goa's restaurants, Martin's Corner, before departing.</ul>
    </br>
    <button type="button" class="btn btn-primary" id="GoaPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="AGRA" >
    <ul>
   <li><img src="https://th.bing.com/th/id/OIP.jZdEE0wsnvu7VJHy7DF8fwHaEV?w=279&h=180&c=7&r=0&o=5&cb=iwc1&dpr=1.3&pid=1.7" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>AGRA</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Delhi-TajMahal </b></div>
      <ul>Morning:   Taj Mahal (spend a few hours exploring this iconic monument). </ul>
      <ul>Afternoon: Agra Fort (explore the red sandstone fort, including Moti Masjid and Diwan-i-Khas).  </ul>
      <ul>Evening:   Tomb of Itimad-ud-Daulah (known as the "Baby Taj"). </ul>
      <div class="fw-bold"><b>Day 2: Fatehpur Sikri</b> </div>
      <ul>Morning:  Fatehpur Sikri ( a perfectly preserved abandoned city built by Emperor Akbar).</ul>
      <ul>Afternoon:Explore the grounds of Fatehpur Sikri, visiting Jodha Bai's Palace, Diwan-i-Khas.</ul>
      <ul>Evening:  Wildlife SOS Elephant Conservation and Care Center. </ul>
      <div class="fw-bold"><b>Day 3: Day trip to Vrindavan/Mathura</b> </div>
      <ul>Vrindavan: Visit the Prem Mandir, Banke Bihari Temple, and other Hindu deity Krishna temples</ul>
      <ul>Mathura: Explore Krishna Janmabhoomi Temple, a significant Hindu pilgrimage site. </ul>
      <div class="fw-bold"><b>Day 4: Mehtab Bagh and Akbar's Tomb   </b></div>
      <ul>Morning: Mehtab Bagh (gardens with views of the Taj Mahal across the Yamuna river).</ul>
      <ul>Afternoon: Akbar's Tomb (a unique blend of Persian and Indian architecture).</ul>
      <ul>Evening: Relax and explore local markets or enjoy a cultural performance. </ul>
      <div class="fw-bold"><b>Day 5: Handicrafts shop </b> </div>
      <ul>Morning: Optional: Visit a local handicrafts shop or take a cooking class.</ul>
      <ul>Afternoon: Relax at a garden or park, local food scene, or revisit a favorite spot.</ul>
      <ul>Evening: Depart from Agra. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="AgraPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="DELHI" >
    <ul>
   <li><img src="https://image3.mouthshut.com/images/imagesp/925747858s.jpg" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>DELHI</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Old Delhi Exploration </b></div>
      <ul>Morning: Explore the Red Fort, a UNESCO World Heritage Site. </ul>
      <ul>Afternoon: Visit Jama Masjid, one of the largest mosques in India</ul>
      <ul>Afternoon: experience Chandni Chowk market.</ul>
      <ul>Evening: Enjoy a rickshaw ride through Chandni Chowk and dinner at a local restaurant.</ul>
      <div class="fw-bold"><b>Day 2: South Delhi Landmarks</b> </div>
      <ul>Morning: Visit Qutub Minar, another UNESCO World Heritage Site, and explore Qutub Complex.</ul>
      <ul>Afternoon: Explore Humayun's Tomb, an architectural marvel and inspiration for the Taj Mahal.</ul>
      <ul>Evening: Visit the Lotus Temple, a unique Bahai house of worship.</ul>
      <div class="fw-bold"><b>Day 3: Culture and Relaxation</b> </div>
      <ul>Morning: Visit the Swaminarayan Akshardham Temple, a beautiful Hindu temple complex.</ul>
      <ul>Afternoon: Relax in Lodi Gardens, a peaceful green space with historical tombs.</ul>
      <ul>Evening: Enjoy dinner at a restaurant in Khan Market or Connaught Place.</ul>
      <div class="fw-bold"><b>Day 4: Memorials and Parks</b></div>
      <ul>Morning: Visit Raj Ghat, the memorial of Mahatma Gandhi.</ul>
      <ul>Afternoon: Explore India Gate, a war memorial, and stroll along Rajpath.</ul>
      <ul>Evening: Visit the National Rail Museum to learn about the history of Indian railways.</ul>
      <div class="fw-bold"><b>Day 5: Shopping and Departure</b> </div>
      <ul>Morning: Explore the markets of Delhi, such as Sarojini Nagar Market or Dilli Haat.</ul>
      <ul>Afternoon: Visit the National Museum to explore Indian art and culture.</ul>
      <ul>Evening: Depart from Delhi, or enjoy a final dinner at a restaurant of your choice.</ul>
    </br>
    <button type="button" class="btn btn-primary" id="DelhiPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="MUMBAI" >
    <ul>
   <li><img src="https://www.mistay.in/travel-blog/content/images/2021/07/Roam-around-7-Historcial-Monuments-of-Mumbai--Gateway-of-India-I-Mistay.jpeg" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>MUMBAI</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Iconic Mumbai  </b></div>
      <ul>Morning: Visit the iconic Gateway of India.</ul>
      <ul>Afternoon: Take a ferry to Elephanta Caves, a UNESCO World Heritage site.</ul>
      <ul>Evening: Explore Colaba Causeway for shopping and food.</ul>
      <ul>Night: Experience Mumbai's nightlife in Colaba or Bandra.</ul>
      <div class="fw-bold"><b>Day 2: History and Culture </b> </div>
      <ul>Morning: Explore Chhatrapati Shivaji Terminus, a UNESCO World Heritage site.</ul>
      <ul>Afternoon: Visit the Chhatrapati Shivaji Maharaj Vastu Sangrahalaya (Prince of Wales Museum).</ul>
      <ul>Evening: Visit Siddhivinayak Temple and Haji Ali Dargah.</ul>
      <div class="fw-bold"><b>Day 3: Nature and Relaxation </b> </div>
      <ul>Morning: Visit Sanjay Gandhi National Park or Kanheri Caves.</ul>
      <ul>Afternoon: Relax at Juhu Beach or Chowpatty Beach.</ul>
      <ul>Evening: Enjoy a sunset view at Marine Drive.</ul>
      <div class="fw-bold"><b>Day 4: Local Exploration</b></div>
      <ul>Morning: Explore local markets like Colaba Causeway or Crawford Market.</ul>
      <ul>Afternoon: Visit Kala Ghoda Art Precinct or Banganga Tank.</ul>
      <ul>Evening: Enjoy a Bollywood movie or a show at the Nehru Centre.</ul>
      <div class="fw-bold"><b>Day 5: Day Trip or Relaxation </b> </div>
      <ul>Option 1: Day Trip: Take a day trip to Matheran, a hill station near Mumbai.</ul>
      <ul>Option 2: Relaxation: Spend the day at a spa, enjoy a shopping spree, or revisit your favorite spot</ul>
    </br>
    <button type="button" class="btn btn-primary" id="MumbaiPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="KERALA" >
    <ul>
   <li><img src="https://th.bing.com/th/id/R.d4b982dc0b9b3b2bf598df85cca53b04?rik=A%2bdvghH3SSORjg&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fcqmpGqQ.jpg&ehk=7bCV%2bNwXKVo2KV8ugI%2fzAK4ltNIoYFntxYUgZZtYYPE%3d&risl=&pid=ImgRaw&r=0" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>KERALA</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Kochi </b></div>
      <ul>Arrive at Kochi Airport (COK) and transfer to your hotel in Fort Kochi.</ul>
      <ul>Explore Fort Kochi, including the Chinese fishing nets, Jewish Synagogue, and Mattancherry Palace.</ul>
      <ul>Enjoy a traditional Kathakali dance performance in the evening. </ul>
      <div class="fw-bold"><b>Day 2: Munnar</b> </div>
      <ul>Drive to Munnar, a scenic hill station in the Western Ghats.</ul>
      <ul>Visit tea plantations and enjoy the views.</ul>
      <ul>Explore Eravikulam National Park (if open).</ul>
      <div class="fw-bold"><b>Day 3: Thekkady</b> </div>
      <ul>Travel to Thekkady, known for its wildlife sanctuary and spice plantations.</ul>
      <ul>Take a boat ride on Periyar Lake or explore the Anayirangal Dam.</ul>
      <ul>Visit a spice plantation for a tour and tasting.</ul>
      <div class="fw-bold"><b>Day 4: Alleppey Backwaters</b></div>
      <ul>Drive to Alleppey, a town famous for its backwaters and houseboats.</ul>
      <ul>Take a houseboat ride for a relaxing backwater experience.</ul>
      <ul>Enjoy a sunset cruise on the backwaters. </ul>
      <div class="fw-bold"><b>Day 5: Varkala or Kochi</b> </div>
      <ul>Spend the day at Varkala beach, known for its cliffs and turquoise waters.</ul>
      <ul>Alternatively, return to Kochi for some last-minute shopping or sightseeing before your departure. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="KeralaPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="KARNATAKA" >
    <ul>
   <li><img src="https://www.kstdc.co/wp-content/uploads/2019/10/b3d.jpg" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>KARNATAKA</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Arrive in Bangalore, transfer to Mysore, and visit the Mysore Palace and Chamundi Hills.  </b></div>
      <div class="fw-bold"><b>Day 2: Explore Srirangapatna and Srikanteshwara Temple, then drive to Coorg. </b> </div>
      <div class="fw-bold"><b>Day 3: Visit Udupi, Visit Omkareshwara Temple, Dubare Elephant Camp, and Abbey Falls in Coorg. </b> </div>
      <div class="fw-bold"><b>Day 4: Drive from Coorg to Hampi, explore the UNESCO World Heritage site. </b></div>
      <div class="fw-bold"><b>Day 5: Explore more of Hampi, then drive back to Bangalore for departure. </b> </div>
    </br>
    <button type="button" class="btn btn-primary" id="KarPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="ANDRAPRADHESH" >
    <ul>
   <li><img src="https://blog.redbus.in/wp-content/uploads/2024/03/historical-places-in-Andhra-Pradesh-850x478.png" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>Andhra PRADHESH</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Tirupati - Spiritual Awakening</b></div>
      <ul>Morning: Arrive in Tirupati and visit the famous Tirumala Venkateswara Temple. </ul>
      <ul>Afternoon: Explore other temples in Tirupati, such as Sri Padmavathi Ammavari Temple.  </ul>
      <ul>Evening: Relax and enjoy the evening atmosphere.</ul>
      <div class="fw-bold"><b>Day 2: Visakhapatnam - Coastal Charm</b> </div>
      <ul>Morning: Travel to Visakhapatnam and visit RK Beach.</ul>
      <ul>Afternoon: Explore Kailasagiri Hill Park for panoramic views.</ul>
      <ul>Evening: Relax on the beach or visit the INS Kursura Submarine Museum. </ul>
      <div class="fw-bold"><b>Day 3: Visakhapatnam - Nature and Culture</b> </div>
      <ul>Morning: Visit Borra Caves, a natural wonder in Ananthagiri Hills.</ul>
      <ul>Afternoon: Explore Kambalakonda Wildlife Sanctuary.</ul>
      <ul>Evening: Enjoy a meal and experience the local culture. </ul>
      <div class="fw-bold"><b>Day 4: Araku Valley - Hill Station Charm</b></div>
     <ul> Morning: Travel to Araku Valley, a picturesque hill station.</ul>
      <ul>Afternoon: Visit the tribal museum and learn about the local culture.</ul>
      <ul>Evening: Enjoy the scenic beauty and pleasant weather. </ul>
      <div class="fw-bold"><b>Day 5: South Goa - Optional Activities and Departure </b> </div>
      <ul>Morning: Enjoy the final day in Araku Valley or</ul>
      <ul>Travel back to Visakhapatnam for a morning visit to a local attraction.</ul>
      <ul>Afternoon: Depart from Visakhapatnam or explore other nearby attractions. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="AndPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="KASHMIR" >
    <ul>
   <li><img src="https://wallpaperaccess.com/full/1547026.jpg" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>KASHMIR</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Arrival in Srinagar: </b></div>
      <ul>Arrive at Srinagar Airport and check into your hotel or houseboat. </ul>
       <ul>You can explore the city, enjoy a Shikara ride on Dal Lake & visit the Mughal Gardens.  </ul>
      <div class="fw-bold"><b>Day 2: Gulmarg Day Tour:</b> </div>
      <ul>Travel to Gulmarg, famous for its scenic beauty and gondola ride. </ul>
      <ul>You can enjoy the slopes, take a pony ride, visit the Gulmarg Biological Park. </ul>
      <div class="fw-bold"><b>Day 3: Drive to Pahalgam:</b> </div>
      <ul>Travel to Pahalgam, another scenic valley known for its beautiful landscapes.</ul>
      <ul>You can explore Aru Valley, Betaab Valley, and Chandanwari. </ul>
      <div class="fw-bold"><b>Day 4: Sonmarg Day Tour:</b></div>
      <ul>Take a day trip to Sonmarg, a meadow known for its stunning views & trekking opportunities.</ul>
      <ul>Visit Thajiwas Glacier.</ul>
      <div class="fw-bold"><b>Day 5: Shopping and Departure:</b> </div>
      <ul>Spend the day at Varkala beach, known for its cliffs and turquoise waters.</ul>
      <ul>Spend the morning shopping for souvenirs and handicrafts. </ul>
      <ul> to the airport for your departure. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="KasPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="BHUTAN" >
    <ul>
   <li><img src="https://www.tripsavvy.com/thmb/saOZewSddzwrte1JZ3VFkzVhT5A=/2123x1412/filters:fill(auto,1)/GettyImages-133969846-596da35068e1a200112a3e89.jpg" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>BHUTAN</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Paro Arrival and Thimphu Transfer</b></div>
      <ul>Arrive at Paro International Airport, transfer to Thimphu (approx. 1.5-2 hour drive).</ul>
      <ul>Check into your hotel and enjoy a relaxing evening.</ul>
      <div class="fw-bold"><b>Day 2: Thimphu Exploration </b> </div>
      <ul>Visit the Buddha Dordenma, a massive Buddha statue overlooking Thimphu. </ul>
      <ul>Explore Trashichho Dzong, the central monastery of Bhutan.</ul>
      <ul>Wander through Thimphu's markets and enjoy local culture.</ul>
      <div class="fw-bold"><b>Day 3: Thimphu to Punakha </b> </div>
      <ul>Drive from Thimphu to Punakha (approx. 3 hours).</ul>
      <ul>Visit Punakha Dzong, the ancient capital and a stunning example of Bhutanese architecture.</ul>
      <ul>Enjoy a traditional hot stone bath.</ul>
      <div class="fw-bold"><b>Day 4: Punakha and Paro </b></div>
      <ul>Explore more of Punakha, including the Punakha Suspension Bridge.</ul>
      <ul>Drive from Punakha to Paro (approx. 4 hours).</ul>
      <ul>Check into your Paro hotel and relax.</ul>
      <div class="fw-bold"><b>Day 5: Shopping and Departure:</b> </div>
      <ul>Spend the day at Varkala beach, known for its cliffs and turquoise waters.</ul>
      <ul>Spend the morning shopping for souvenirs and handicrafts.</ul>
      <ul>Transfer to the airport for your departure. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="ButPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="JAIPUR" >
    <ul>
   <li><img src="https://th.bing.com/th/id/OIP.zNMz5uGS0dZdeSj6pDH9DgHaE8?w=264&h=180&c=7&r=0&o=5&cb=iwc1&dpr=1.3&pid=1.7" alt="GOA" width="500" height="600"></li> 
    <li>
        <h2>JAIPUR</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Arrival and City Tour</b></div>
      <ul>Arrive in Jaipur and check into your hotel. </ul>
      <ul>Visit the majestic Amber Fort. </ul>
      <ul>Explore the City Palace and its museums. </ul>
      <ul>Visit the astronomical wonder Jantar Mantar. </ul>
      <ul>In the evening, explore the Bapu and Johari Bazaars for local handicrafts. </ul>
      <div class="fw-bold"><b>Day 2: Ajmer and Pushkar Excursion</b> </div>
      <ul>Take a day trip to Ajmer to visit the Ajmer Sharif Dargah.  </ul>
      <ul>Explore the Ana Sagar Lake and the Adhai Din Ka Jhonpra.  </ul>
      <ul>Visit Pushkar to explore the Brahma Temple and the Pushkar Lake. </ul>
      <div class="fw-bold"><b>Day 3: Ranthambore National Park (Optional)</b> </div>
      <ul>Take a day trip to Ranthambore National Park for a wildlife safari. </ul>
      <ul>Explore the fort and surrounding areas.  </ul>
      <div class="fw-bold"><b>Day 4: Jaipur City Tour</b></div>
      <ul>Visit Hawa Mahal (Palace of Wind). </ul>
      <ul>Explore the Nahargarh Fort. </ul>
      <ul>Visit the Albert Hall Museum. </ul>
      <div class="fw-bold"><b>Day 5: Departure</b> </div>
      <ul>Enjoy a final breakfast in Jaipur.</ul>
      <ul>Depart from Jaipur. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="JaiPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="NEPAL" >
    <ul>
   <li><img src="https://imgcld.yatra.com/ytimages/image/upload/v1438930398/Kathmandu_4.jpg" alt="GOA" width="600" height="600"></li> 
    <li>
        <h2>NEPAL</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Kathmandu</b></div>
      <ul>Arrive in Kathmandu, explore Thamel (a backpacker area) and</ul>
      <ul>Visit Pashupatinath Temple and Boudhanath Stupa.</ul>
      <div class="fw-bold"><b>Day 2: Bhaktapur</b> </div>
      <ul>Day trip to Bhaktapur to see Durbar Square and potter's workshops </ul>
      <ul>Explore Trashichho Dzong, the central monastery of Bhutan.</ul>
      <ul>Wander through Thimphu's markets and enjoy local culture.</ul>
      <div class="fw-bold"><b>Day 3: Pokhara and Phewa Lake</b> </div>
      <ul>Scenic drive or flight to Pokhara, known for its stunning mountain views</ul>
      <ul>Phewa Lake. </ul>
      <div class="fw-bold"><b>Day 4: Sarangkot,Bindhyabasini</b></div>
      <ul>Enjoy sunrise from Sarangkot, visit the Bindhyabasini Temple,</ul>
      <ul>Take a boat ride on Phewa Lake. </ul>
      <div class="fw-bold"><b>Day 5: Gupteshwor Cave, Devi's Fall</b> </div>
      <ul>Explore Pokhara's attractions like Devi's Fall </ul>
      <ul>Gupteshwor Cave before returning to Kathmandu or heading home. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="NepPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="PUNJAB" >
    <ul>
   <li><img src="https://th.bing.com/th/id/R.a012d73b00e8d94b92acf5d1deb80718?rik=zNuNaEEH6wNXyQ&riu=http%3a%2f%2fgetwallpapers.com%2fwallpaper%2ffull%2fa%2f3%2f2%2f1050688-punjab-wallpapers-1920x1080-hd-1080p.jpg&ehk=ee14DZlRsezzCc3P9j8N%2bYC6l%2bZqtxM2hyFk7ERDqvo%3d&risl=&pid=ImgRaw&r=0" alt="GOA" width="600" height="600"></li> 
    <li>
        <h2>PUNJAB</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Arrival in Amritsar and Golden Temple </b></div>
      <ul>Arrive at Amritsar Railway Station and check into your hotel.</ul>
      <ul>Visit the Golden Temple, the holiest Sikh shrine, and experience the langar</ul>
      <ul>Witness the Palki Sahib ceremony, a procession carrying the Guru Granth Sahib.</ul>
      <div class="fw-bold"><b>Day 2: Amritsar Exploration </b> </div>
      <ul>Visit Jallianwala Bagh, a historical site commemorating a massacre.</ul>
      <ul>Explore the Partition Museum to learn about the partition of India and Pakistan.</ul>
      <ul>Visit Akal Takht, a religious and political center of Sikhism.</ul>
      <div class="fw-bold"><b>Amritsar to Chandigarh </b> </div>
      <ul>Travel to Chandigarh by bus or train.</ul>
      <ul>Check into your hotel and visit the Rock Garden, a unique sculpture park.</ul>
      <ul>Explore Sukhna Lake, a scenic spot for nature lovers.</ul>
      <div class="fw-bold"><b>Day 4: Chandigarh and Pinjore </b></div>
      <ul>Explore the planned city of Chandigarh, including its gardens and architecture.</ul>
      <ul>Visit the Pinjore Gardens, a beautiful Mughal garden with historical significance.</ul>
      <div class="fw-bold"><b>Day 5: Departure </b> </div>
      <ul>Depart from Chandigarh to your next destination or back home.</ul>
    </br>
    <button type="button" class="btn btn-primary" id="PunjabPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="LADAKH" >
    <ul>
   <li><img src="https://1.bp.blogspot.com/-vBQpsggBHX4/XcKRTqp9xWI/AAAAAAAAAE0/4cAd5YyLYmghSmfhBI0zWwuJ7wqs9H5wwCLcBGAsYHQ/s1600/beauty.jpg" alt="GOA" width="600" height="600"></li> 
    <li>
        <h2>LADAKH</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Arrival in Leh & Sham Tour</b></div>
      <ul>Fly into Leh and check into your hotel. </ul>
      <ul>Visit the Hall of Fame, Magnetic Hill, Sangam, Gurudwara Pathar Sahib,</ul>
      <ul>Spituk Monastery & Shanti Stupa.</ul>
      <ul>Tip: Consider the "Inner Line Travel Permit" required for certain areas. </ul>
      <ul>Tip: Acclimatize to the altitude in Leh for 1-2 days before venturing out. </ul>
      <div class="fw-bold"><b>Day 2: Leh to Nubra Valley</b> </div>
      <ul>Drive to Nubra Valley, known for its sand dunes and double-humped camels.</ul> 
      <ul>Visit Diskit Monastery, the largest and oldest gompa in the valley. </ul>
      <ul>Tip: The drive to Nubra Valley can be challenging </ul>
      <div class="fw-bold"><b>Day 3: Nubra Valley to Pangong Lake</b> </div>
      <ul>Drive to Pangong Tso, the famous high-altitude lake known for its changing colors.</ul>
      <ul>Spend the night in a camp near Pangong Tso, enjoying the view and local hospitality.</ul>
      <ul>Tip: Be prepared for harsh weather conditions at Pangong Tso,strong winds & freezing temperatures. </ul>
      <div class="fw-bold"><b>Day 4: Pangong Lake to Leh </b></div>
      <ul>Drive back to Leh from Pangong Tso.</ul>
      <ul>Visit Hemis Monastery and Thiksey Monastery on your way back.</ul>
      <ul>Tip: Allow enough time for the drive, as it can be a long and scenic journey. </ul>
      <div class="fw-bold"><b>Day 5: Departure from Leh</b> </div>
      <ul> Departure from Leh</ul>
    </br>
    <button type="button" class="btn btn-primary" id="LadPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="ODISHA">
    <ul>
   <li><img src="https://www.tripsavvy.com/thmb/uswH65VtnkxOFGy6LYu4EZ0mEew=/2121x1414/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-467031976-5c8daa2146e0fb0001f8d053.jpg" alt="GOA" width="600" height="600"></li> 
    <li>
        <h2>ODISHA</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Bhubaneswar</b></div>
      <ul>Arrive in Bhubaneswar, visit the Lingaraj Temple, and explore the local markets. </ul>
      <div class="fw-bold"><b>Day 2: Jagannath Temple </b> </div>
      <ul>Day 2: Travel to Puri, visit the Jagannath Temple, and enjoy the beach. </ul>
      <div class="fw-bold"><b>Day 3: Konark Sun Temple</b> </div>
      <ul>Day 3: Visit Konark Sun Temple and Chandrabhaga Beach. </ul>
      <div class="fw-bold"><b>Day 4: Explore Chilika Lake</b></div>
      <ul>Explore Chilika Lake, known for its birdlife and Irrawaddy dolphins.</ul>
      <div class="fw-bold"><b>Day 5: Puri Beach </b> </div>
      <ul>Relax on Puri Beach or explore Raghurajpur Artist Village.</ul>
    </br>
    <button type="button" class="btn btn-primary" id="OdiPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="BANGLADESH">
    <ul>
   <li><img src="https://www.worldatlas.com/r/w1200/upload/58/75/14/shutterstock-704213116.jpg" alt="GOA" width="600" height="600"></li> 
    <li>
        <h2>BANGLADESH</h2>
        <h2>Total Days: 5 Days</h2>
        <h2>Places to be Visited</h2>
      <div class="fw-bold"><b>Day 1: Dhaka </b></div>
      <ul>Arrive in Dhaka, settle into your hotel, explore National Museum-Bangladesh, </ul>
      <UL>Baitul Mukarram National Mosque, and Lalbagh Fort. </ul>
      <div class="fw-bold"><b>Day 2: Ahsan Manzil Museum </b> </div>
      <ul>Visit Ahsan Manzil Museum, the Armenian Church, and take a stroll through Hatirjheel</ul>
      <ul>Ramna Park for some relaxation. </ul>
      <div class="fw-bold"><b>Day 3: Sylhet </b> </div>
      <ul>Travel to Sylhet, a region known for its natural beauty and tea plantations. </ul>
      <ul>Explore the Sreemangal tea gardens and enjoy the local cuisine. </ul>
      <div class="fw-bold"><b>Day 4: Sreemangal Tea Estate </b></div>
      <ul>Continue exploring Sylhet, perhaps visiting places like Sreemangal Tea Estate and Sahebi Mosque.</ul>
      <div class="fw-bold"><b>Day 5: Departure </b> </div>
      <ul>Return to Dhaka for your departure or explore any remaining attractions. </ul>
    </br>
    <button type="button" class="btn btn-primary" id="BangPay">Payment Details</button>
    </li>
</ul>
</div>
<div class="container" id="payment" style="display: none;">
    <h1 class="form-title">Payment</h1>
    <form method="post" action="register.php">
        <div class="input-group">
        <label for="fname">Full Name:</label>
        <br>
        <input type="text" name="fname" id="fname" placeholder="First name" required>
        <br>
        <label for="Gender">Gender:</label>
        <br>
        <input type="text" name="Gender" id="Gender" placeholder="Male or Female" required>
        <br>
        <label for="email">E-Mail:</label>
        <br>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <br>
        <label for="Phonenumber">Phonenumber:</label>
        <br>
        <input type="Phonenumber" name="Phonenumber" id="Phonenumber" placeholder="1234567890" required>
        <br>
        <label for="Place">Place:</label>
        <br>
        <input type="text" name="Place-password" id="Place-password" placeholder="GOA" required>
        <br>
        <label for="adress">Adress:</label>
        <br>
        <input type="text" name="adress" id="adress" placeholder="eg.xxxxxxxx" required>
        <br>
        <label for="Totalmember">Total No of Persons:</label>
        <br>
        <input type="text" name="Totalmember" id="Totalmember" placeholder="eg.2" required>
        <br>
        <label for="Amount">Total Amount:</label>
        <br>
        <input type="Amount" name="Amount" id="Amount" value="8000" disable>
         <input type="submit" class="btn" value="Proceed" name="Proceedbutton"id="Proceedbutton" ></input>
         </form>
    </div>
   </div>
<script src="homepage.js" ></script>
</body>
</html>