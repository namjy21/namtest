  <div id="slogan">
    <h2>슬로건</h2>
    <p class="sloganImg"><img src="images/common/icon_coffee.png" alt="커피잔" class="png24" /></p>
    <div class="sloganCon"> <q cite="http://www.w3.org/WAI/">The power of the Web is in its universality, Access by everyone regardless of disability is an essential aspect.</q>
      <p class="name">Tim Berners - Lee , W3C Director and inventor of the World Wide Web</p>
    </div>
  </div>
  <hr />
  <div id="footer">
    <div class="footerInner">
      <p class="footerLogo"><img src="images/common/logo_copyright.gif" alt="WebCafe" /></p>
      <h2>사이트 이용안내</h2>
      <ul class="guideMenu">
        <li class="first-item"><a href="#">회사소개</a></li>
        <li><a href="#">개인정보보호정책</a></li>
        <li><a href="#">이메일주소무단수집거부</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Site map</a></li>
      </ul>
      <address>
      <span class="addr">서울시 마포구 상수동 123-12 한주빌딩 5층</span> <span class="tel">· 전화: 02-1234-1234</span> <span class="fax">· FAX: 02-1234-1234</span> <span class="email">· E-MAIL: webmaster@mail.com</span><br />
      <span class="copyright">Copyright ⓒ Web Cafe CORPORATION ALL RIGHTS RESERVED.</span>
      </address>
    </div>
  </div>
</div>
<script type="text/javascript"> 
	function setPng24(obj)
	{
			obj.width = obj.height = 1;
			obj.className = obj.className.replace(/\bpng24\b/i,'');
			obj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ obj.src +"',sizingMethod='image');"
			obj.src = '';
			return '';
	}
</script>
</body>
</html>