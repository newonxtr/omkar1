var myLoad;
       function onload()
       {
        document.body.style.backgroundColor="rgba(23, 32, 42,1.5)";
       }
    function load()
      {
        myLoad = setTimeout(showPage,1500);
      }
    function showPage() {
      document.getElementById("loader").style.display="none";
      document.getElementById("main").style.display="block";
       document.body.style.backgroundColor="#f7f7f7";

    }