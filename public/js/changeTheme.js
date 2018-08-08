window.onload = function(){
  if(localStorage.getItem("tema") != "Alternativo")
  {
    document.getElementById('theme_css').href = '/css/styles3.css';
    document.getElementById('imgAltern').style.opacity = '0.3';
    document.getElementById('imgOriginal').style.opacity = '1';
    document.getElementById('imgOriginal').classList.add("temaActivo");
    document.getElementById('imgAltern').classList.remove("temaActivo");
  }
  else{
      document.getElementById('theme_css').href = '/css/stylesaltern.css';
      document.getElementById('imgOriginal').style.opacity = '0.3';
      document.getElementById('imgAltern').style.opacity = '1';
      document.getElementById('imgAltern').classList.add("temaActivo");
      document.getElementById('imgOriginal').classList.remove("temaActivo");
  }

  document.getElementById('imgOriginal').onclick = function(){
      document.getElementById('theme_css').href = '/css/styles3.css';
      document.getElementById('imgAltern').style.opacity = '0.3';
      this.style.opacity = '1';
      localStorage.setItem("tema", "Original");
      document.getElementById('imgOriginal').classList.add("temaActivo");
      document.getElementById('imgAltern').classList.remove("temaActivo");
  }
  document.getElementById('imgAltern').onclick = function(){
      document.getElementById('theme_css').href = '/css/stylesaltern.css';
      document.getElementById('imgOriginal').style.opacity = '0.3';
      this.style.opacity = '1';
      localStorage.setItem("tema", "Alternativo");
      document.getElementById('imgAltern').classList.add("temaActivo");
      document.getElementById('imgOriginal').classList.remove("temaActivo");
  }
}
