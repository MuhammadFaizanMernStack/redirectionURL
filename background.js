
chrome.windows.onCreated.addListener(function () {
    console.log("OK")
    // chrome.tabs.create({ url: "https://youtube.com" });
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            // chrome.tabs.create({ url: xhttp.responseText });
            chrome.tabs.create({ url: "https://youtube.com" })
        }
    };
    xhttp.open("GET", "http://localhost/website/apis/get.php", true);
    xhttp.send();
})