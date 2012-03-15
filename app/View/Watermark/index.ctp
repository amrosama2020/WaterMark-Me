<header>
	<h1> Watemark your pictures! </h1>
	<br/>
	<div class="subnav">
		<ul class="nav nav-pills">
			<li class="">
				<a href="#upload">Upload Pictures</a>
			</li>
			<li class="">
				<a href="#watermark">Watermark</a>
			</li>
			<li>
				<a href="#download">Download!</a>
			</li>
		</ul>
	</div>
</header>
<section id='upload'>
	<div class="page-header">
		<h1>Upload Your Pictures</h1>
	</div>
	<div class='row'>
		<div class="span5 fileSelector">
			<input type='file' />
		</div>
		<div class="span1 divider">
			|</br/>
			OR<br/>|
		</div>
		<div class="span5 well dragTarget">
			Drop'em Here
		</div>
	</div>
	<div class='row'>
		<div class="span11 well uploadedPictures">
			<div class='noPicsUploaded'></div>
			
		</div>
	</div>
</section>
<section id='watermark'>
	<div class="page-header">
		<h1>Add watermark</h1>
	</div>
	<div class='row'>
		<div class="span5">
			<input type='file' />
		</div>
	</div>
</section>
<section id='download'>
	<div class="page-header">
		<h1>Download</h1>
	</div>
	<div class='row'>
		<div class="span12 downloadBtn">
			<button id="fat-btn" data-loading-text="loading..." class="btn  btn-success">Download</button>
		</div>
	</div>
</section>