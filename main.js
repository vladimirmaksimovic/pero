const body = document.getElementsByTagName("body");
//console.log(body);
body.addEventListener("onload", ajaxData());
//const showAllPhotos = document.querySelector("#show-all-photos");
//console.log(showAllPhotos);
//showAllPhotos.addEventListener("click", ajaxData());

// AJAX
function ajaxData() {
  const xhttp = new XMLHttpRequest()
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const data = JSON.parse(this.responseText)
      console.log(data);
      
      const dataRow = document.querySelector("#data-row");
      
      for (let i = 0; i < data.length; i++) {
        dataRow.innerHTML +=
          "<div class='col'>" +
            "<div class='card shadow-sm'>" +
              "<img src=" + data[i].thumbnailUrl + " class='bd-placeholder-img card-img-top'>" +
              "<div class='card-body'>" +
                "<h3 class='card-title' id='album-id'> Album ID: " +
                  data[i].albumId +
                "</h3><h5 class='card-title' id='photo-id'>Photo Id: " +
                  data[i].id +
                "</h5>" + 
                "<p class='card-text'>" +
                  data[i].title +
                "</p>" +
              "</div>" +
            "</div>" +
          "</div>"
      }
    }
  }
  xhttp.open("GET", "https://jsonplaceholder.typicode.com/albums/1/photos", true)
  xhttp.send()
}