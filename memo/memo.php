<? 
	session_start(); 

	$userid = $_SESSION[userid];
	$username = $_SESSION[username];
	$usernick = $_SESSION[usernick];
	$userlevel = $_SESSION[userlevel];	

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/memo.css" rel="stylesheet" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
		#well1 {
			width: 70%;
		}
		#well2{
			width: 150px;
		}
		#nav-pills{
			font-size: 18px;
		}
	</style>
</head>
<body>
	<div id="wrap">
		<div id="header">
			<? include "../lib/top_login2.php"; ?>
		</div>  <!-- end of header -->

		<div id="menu">
			<? include "../lib/top_menu2.php"; ?>
		</div>  <!-- end of menu --> 

		<div id="content">    
			<div id="col1">
				<div id="left_menu">
				<div id="well2" class="well">
					<?
					include "../lib/left_menu.php";
					?>
					</div>
				</div>
			</div>
			<div id="col2">  
				<div id="title">
					<img src="../img/title_coffee.gif">
				</div>

				<div class="container">
				<br>
					<ul class="nav nav-pills">
						<li class="active"><a id="nav-pills" data-toggle="pill" href="#home">Coffee?</a></li>
						<li><a id="nav-pills" data-toggle="pill" href="#menu1">Coffee's History</a></li>
						<li><a id="nav-pills" data-toggle="pill" href="#menu2">커피의종류</a></li>
						<li><a id="nav-pills" data-toggle="pill" href="#menu3">커피의효능?부작용?</a></li>
					</ul>

					<div class="tab-content">
						<!-- 커피란? 시작 -->
						<div id="home" class="tab-pane fade in active">
							<br>
							<div id = "well1" class="well well-sm" >
								<div class="media">
									<div class="media-body">
										<p>커피(coffee)는 커피나무의 씨(커피콩)를 볶아 가루로 낸 것을 따뜻한 물과 차가운물 또는 증기로 우려내어 마시는 쓴맛이 나는 음료이다.</p>
										<p>커피콩은 주로 적도지방 라틴 아메리카, 동남아시아, 남 아시아 그리고 아프리카의 70여개국에서 재배되는 커피나무에서
											얻을 수 있다. 녹색 커피콩(로스팅 전의 콩, 생두)은 세계에서 가장 많이 교역되는 농산물 중의 하나이다.</p>
										</div>
										<div class="media-right">
											<img src="../img/coffee_bin.jpg" style="width:180px"  class="media-object img-circle" alt="Cinque Terre">
										</div>
									</div>

									<p>커피는 그 카페인 성분으로 인해 사람을 각성시키는 효과를 가지고 있다. 커피는 세계에서 가장 많이 소비되는
										음료 중의 하나이다.     1년에 세계적으로 약 6천억 잔이 소비된다고한다.</p>
										<p>커피는 많은 사회에서 중요한 역할을 해 왔다. 커피의 기운을 북돋우는 효과는 에티오피아 동북부 지방에서
											발견된 것으로 생각되며, 커피의 재배는 아랍으로 처음 전파되었다.  커피의 음용에 대한 최초의 믿을 수 있는 증거는
											15세기 중반 ,남부 아라비아의 예멘의 수피즘 사원에서 발견되었다.</p>
											<p>커피는 무슬림 세계로부터 인도, 이탈리아, 그리고 나머지 유럽으로, 인도네시아, 미주 대륙으로 전파되었다.</p>
											<p>남 아프리카와 예멘에서, 커피는 종교의식에 사용되었고, 그 결과, 에티오피아 정교회에서는 세속적인 소비를 금지하였고, 
												금지령은 에티오피아 메네릭 2세 때까지 유지되었다. </p>
												<p>커피는 오토만 제국 터키에서 17세기에 정치적인 이유로 금지되었고, 유럽에서는 반체제적 정지 활동과 연관되어 있었다.</p>
											</div>
										</div>

										<!-- 커피의역사 시작 -->

										<div id="menu1" class="tab-pane fade">
											<br>
											<div id = "well1" class="well well-sm">
												<h3>※ 커피의기원</h3>
												<p>커피는 늦어도 9세기부터 에티오피아의 고지대에서 재배되기 시작한 것으로 보인다. 전설에 따르면 염소 목동이었던
													칼디(Kaldi)가 우연히 염소들이 먹던 열매를 발견했고 열매를 마을에 가져오면서 피곤함을 덜어주는 커피의 효능을 마을의 종교 수행자들을 돕기 위해 쓰이게 됐다고 전한다.</p>
													<p>그곳에서부터 커피는 이집트와 예멘으로 전파되었다.</p>
													<p>커피에 대한 처음 반응은 그다지 좋지 않았다. 1511년에는 신경을 자극하는 성질 때문에 메카의 보수적인 이맘에 의해 금지되었다. 하지만 이 음료의 인기, 특히 그리스인과 지식인 사이에서의 인기를 꺾을 수 없었고 결국 오스만 투르크 술탄 셀림 1세에 의해 커피 금지령이 폐지되었다. 카이로에서도 비슷한 금지령이 1532년에 세워졌고, 커피샵과 커피 창고들이 파괴되었다. 하지만 이후 1554년 이스탄불에 세계 최초의 커피 가게인 카페 키바 한(Cafe Kiva Han)이 들어서게 된다.</p>
													
													<hr>

													<h3>※ 한국의 커피역사</h3>
													<br>
													<p>한국에서의 커피 역사는 대략 1890년 전후로 알려져 있다. 대체적으로 이 시기에 외국의 문물이 많이 들어오던 시기여서 이때 커피가 전파되었다는 다양한 설이 제기되고 있다.</p>
													<p> 공식문헌상으로는 1895년 을미사변으로 인하여 고종황제가 러시아 공사관에 피신해 있을때 러시아 공사가 커피를 권했다고 나타나있다. 이렇게 커피를 즐기게 된 고종은 환궁 후에도 커피를 즐겨마시곤 했다고 전해진다.</p>
													<p> 그리고 이 무렵 서울 중구 정동에 손탁호텔이라는 곳이 세워졌는데 그곳에서는 커피하우스가 있었다. 이것이 최초의 커피하우스였다. 또 이무렵 일본을 통해서도 커피가 전파되었는데 일본인들이 차린 양식찻집에 의해서 커피가 전파되었다.</p>

													<p>그 후 일제강점기 시절 근대적 의미의 다방이 많이 생겨 일본인들이 주로 찾고 몇몇 지식인들과 문학가들이 폭넓게 드나들었다고 한다. 하지만 이러한 다방은 세계2차대전 전후로 하여 대부분 문을 닫았다가 해방과 동시에 미군이 주둔하기 시작하면서 군용식량에 포함되어있던 인스턴트커피는 우리나라 커피문화 발전의 촉매제가 되었다.</p>
													<p> 그 후 커피믹스가 개발되고, 자판기가 등장 하는 등 커피의 대중화를 이루었고 1980년대 이후에는 원두커피 전문점이 등장하고 1999년에는 스타벅스가 국내에 진출하여 이화여대 앞에 1호점을 연것을 기점으로 국내 에스프레소 커피전문점은 폭발적인 성장을 이루게 되었다. 그 이후 더 많은 커피전문점이 들어서면서 커피빈, 파스쿠치, 엔젤리너스, 할리스, 이디야커피, 탐앤탐스 등의 업체들이 치열하게 경쟁을 이루게 되었다. 폭발적인 커피 전문점의 증가로, 현재 서울은 전세계 도시중에서 최고의 밀집도를 보이고 있다.</p>
												</div>
											</div>

											<!-- 커피의종류 시작 -->
											<div id="menu2" class="tab-pane fade">
												<br>
												<div id = "well1" class="well well-sm">
													<h3>커피작물의 종류</h3>
													<p>커피는 꼭두서니과(Rubiaceae) 코페아속(Coffea)에 속한다.커피는 크게 아라비카(Arabica)와 로부스타(Robusta-canephora), 그리고 리베리카(Liberica) 품종으로 나뉘는데 그 중 아라비카는 전 세계 생산량의 75%를 차지하고 향기와 맛이 좋아 최고의 품질로 인정받고 있다. 로부스타는 카페인 함유량이 아라비카 종보다는 다소 높다. 리베리카는 수확량도 부족하여 앞선 두 개의 품종보다는 많이 쓰이지 않는다.</p>

													<p>아라비카의 종류로는 나뭇잎 끝 부분이 구릿빛을 띠고 생두의 모양은 가늘고 끝이 뾰족한 타이피카(Typica), 타이피카와 함께 2대 재배품종으로 알려진 버번(Bourbon), 버번의 돌연변이종인 카투라(Catura), 자메이카에서 가장 많이 자라나고 고도가 높은 지역에서 가장 잘 자라는 블루마운틴(Blue Mountain), 아라비카와 로부스타의 혼종으로 개량된 카티모르(Catimor)가 있고 그 외에는 카투아이(Catuai), 마라고지페(Maragogipe), 티모르(Timor) 등이 있다.</p>

													<hr>

													<h3>추출방식에따른 종류</h3>

													<div class="media">
														<div class="media-body">
															<h4 class="media-heading">※드립커피</h4>
															<p>드립 커피(Drip Coffee)란 볶아서 갈은 커피 콩을 거름 장치에 담고, 그 위에 물을 부어 만드는 커피로 보통 원두커피로 불린다. 드립 브류(Drip brew)라 함은 이와 같이 커피를 만드는 방법을 일컫는다. 거름 장치를 필터라고도 하기 때문에 드립 커피를 영어로 filtered coffee라고도 한다.</p>
														</div>
														<div class="media-right">
															<img src="../img/Drip_Coffee.jpg" style="width:120px"  class="media-object" alt="Cinque Terre">
														</div>
													</div>
													<hr>

													<h4>※콜드브루(더치커피)</h4>
													<p>더치 커피(dutch coffee)는 '네덜란드의' '네덜란드 방식의' 커피라는 의미이다. 더치커피의 유래는 대항해 시절에 네덜란드 상인들이 동남아 지역에서 커피를 유럽으로 실어나르는 동안에, 장기간에 걸친 항해 중에 커피를 먹기 위해서 고안했다고 전해지지만, 관련된 문헌은 전혀 없으며 사실상 아무런 역사적 근거가 없다.</p>

													<div class="media">
														<div class="media-body">

															<p>이러한 더치커피의 유래는 일본에서 마케팅을 이용해 만든 이야기로 실제로 네덜란드에서 '더치 커피'라 하면 알아듣지 못한다. 또한 더치라는 영문 단어는 실제 영어에는 단어이며, 영어권 나라에서는 드립 커피와 대조되는 단어인 콜드브류(Cold brew)로 표기하고 있다.</p>
															<p> 또한 다른 커피 추출법과 달리 찬물로 추출하기 때문에 카페인이 적거나 없다고 알려져 있지만 실제로는 일반 커피보다 카페인이 많을 수도 있다. 카페인의 특성상 70도 이상에서 추출이 활발히 일어나지만 그 이하 온도에서도 추출이 일어나기 때문에 장시간 추출되는 더치의 특성상 충분한 카페인이 함유되어 있을 수 있다. 따라서 디카페인 커피로 더치를 추천한다면 그것은 잘못된 지식이다.</p>

														</div>
														<div class="media-right">
															<img src="../img/Cold_Brew.jpg" style="width:100px"  class="media-object" alt="Cinque Terre">
														</div>
													</div>

													<hr>

													<h4>※에스프레소</h4>
													<p>에스프레소, 다른 말로 카페 에스프레소(이탈리아어: caffè espresso)는, 고압·고온 하의 물을 미세하게 분쇄한 커피 가루에 가해 추출해내는 고농축 커피의 일종이다.
														초창기 에스프레소는 20세기 초반 이탈리아 밀라노 지역에서 개발되었다. 당시 에스프레소는 순수하게 수증기의 압력으로 추출되었다. 1940년대 중반 스프링 피스톤 레버 머신이 개발되어, 오늘날 우리가 알고 있는 형태의 에스프레소 커피가 제조되기 시작하였다. 오늘날에는 대개 대기압의 9~15배의 압력을 가해 에스프레소를 추출한다.</p>

														<div class="media">
															<div class="media-body">

																<p>에스프레소의 가장 큰 특징은 드립 커피(거름종이에 내리는 커피)보다 농도가 짙다는 것이다. 같은 부피를 놓고 비교해 봤을 때 드립 커피보다 일정 부피 안에 용해된 고형체의 양이 많다. 그러나 흔히 생각하는 것과는 달리 카페인의 함유량이 적은데, 커피를 빠른 시간에 뽑아내기 때문이며, 에스프레소용 커피 콩이 드립용보다 카페인이 낮은 경우가 대부분이기 때문이다. 이탈리아어의 espresso의 의미 역시 '고속의', '빠른' 이라는 형용사이다. (영어: :Express) 에스프레소용 커피는 주로 보통 내려 먹는 커피보다 강하게 볶은(한자어:강배전) 커피를 쓴다.</p>

															</div>
															<div class="media-right">
																<img src="../img/Coffee_espresso.jpg" style="width:100px"  class="media-object" alt="Cinque Terre">
															</div>
														</div>
														<p>커피 머신으로 추출하는 방법을 다르게 하면 다른 이름이 붙는다. 흔히들 먹는 에스프레소(카페 에스프레소)가 있고, 짧은 시간에 20~25ml의 양을 추출한 에스프레소를 의미하는 리스트레또가 있다. 또한 리스트레또와 커피의 분량은 같고 물이 2배정도 증가되어 추출된 커피인 룽고가 있다. 그리고 도피오는 두 배라는 뜻으로 에스프레소 두 잔을 한잔에 추출하는 것으로 흔히 더블 에스프레소라고 부른다.</p>
													</div>
												</div>

												<!-- 커피의효능?부작용? 시작 -->
												<div id="menu3" class="tab-pane fade">
												<br>
											<div id = "well1" class="well well-sm">
												<h3>커피의효능</h3>
													  <p>! 커피는 보통 물만큼의 수화 작용을 한다.</p>
													   <p>카페인이 이뇨작용을 일으키기 위해서는 550mg이 필요한데, 보통 커피 한 잔은 80~150mg의 카페인을 함유하고 있다.(자판기 커피는 20~50mg) 따라서 모닝커피 한잔 정도로는 이뇨작용이 일어나지 않는다.</p>

													   <p>!! 심장질환의 위험을 줄여주고 심장마비의 가능성을 낮춰준다.</p>
													   <p>하루에 1~3잔의 커피는 심장질환을 24% 가까이 줄여준다.</p>

													   <p>!!!일부 암 발생 확률을 줄여준다.</p>
													   <p>하루에 커피를 두잔 이상 마시는 사람은 간암 발생 확률이 50% 줄어든다. 또한 최근의 연구결과에 따르면 여성이 유방암에 걸릴 확률을 크게 줄여준다고 한다.</p>

													   <p>!!!! 심한 운동을 마친 운동선수들의 회복을 도와준다.</p>
													   <p>운동을 마친 선수들이 섭취하는 탄수화물에 커피를 첨가했을 경우, 기존대비 60%의 에너지를 더 저장할 수 있다.여기서 에너지를 저장한다는 말은 뱃살로 저장한다는 게 아니라 근육내 글리코겐 저장을 말하는 것이다. 이는 커피가 지방세포의 지방 축적을 막아 남은 당이 근육 쪽으로 더 많이 가기 때문이다.</p>
													<hr>
												<h3>커피의부작용</h3>
													<h4>★불면증★</h4>
													<p>과다 섭취시 카페인이 중추 신경을 자극하여 불면증이 유발할수 있다. 카페인에 대한 민감도에 따라 다르지만 잠 들기 6시간 내에는 섭취를 하지 않는 것이 좋다.</p>

													<h4>★일사병★</h4>
													<p>운동선수나 야외에서 시행되는 직종들은 대부분 평소에도 태양에 노출되있고 소모되는 수분량도 상대적으로 많기 때문에 업무이후에 과도한 커피 섭취를 삼가하자. 특히 평균적으로 기온이 높은 여름철에는 일사병등의 원인으로 작용할수 있으니 주의해야한다.</p>

													<h4>★카페인 유발성 두통★</h4>
													<p>드립 커피 기준으로 하루에 5-6잔 이상씩 2년 정도 마시면 60% 정도에서 카페인 유발성 두통이 생긴다. 카페인 자체는 뇌혈관 순환을 촉진하여 두통을 줄여주지만, 반발성으로 카페인이 없으면 두통을 유발시킨다. 참고로 저 커피 기준은 드립 커피이다. 인스턴트 커피, 특히 자판기용 커피는 g당 카페인 함량이 37.5mg로, 12.2mg인 드립 커피, 19.7mg인 일반 인스턴트 커피에 비해 2~3배 정도 카페인 함량이 높으니 주의를 요한다. 즉, 인스턴트 커피는 하루 3잔, 자판기용 인스턴트 커피는 하루 2잔 이상 마시면 카페인 유발성 두통이 발생할 수 있다는 것.</p>
												</div>
											</div>

									</div><!-- tab-content -->
									</div><!-- container -->
								</div> <!-- end of col2 -->
							</div> <!-- end of content -->
						</div> <!-- end of wrap -->

					</body>
					</html>
