<html ng-app="vacationApp">
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="app.css">
<script src="jquery-2.1.4.min.js"></script>
<script src="angular.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="padding:50px;">
<div ng-controller="AlbumListController">
	<p>
		<input placeholder="Type to search....." type="text" ng-model="searchFor"  size="30"/>
	</p>
	<p>
		There are {{albums.length}} albums available to view:
	</p>

		<!--<ul><li ng-repeat = "album in albums">
			<ul>
			 <li ng-repeat ="(key, value) in album">
			 	<strong>{{key}}</strong> = {{value}}
			 </li>
			</ul>
		</li></ul>-->
		 
		<div class="album panel panel-primary" ng-repeat = "album in albums | filter:{title: searchFor} | orderBy:'date'">
			<div class="panel-heading">
				<div style="float:right">{{album.date}}</div>
				{{album.title}}

			</div>
			<div class="description">
				{{album.description}}
			</div>
		</div>
	
</div>
<!--<script type="text/javascript" src="app.js"></script>-->
<script>
function AlbumListController ($scope){

	$scope.albums = [{name:'Madrid', title:'Holiday in Madrid', date:'2014-02-02', description:'A feb holiday in Madrid, spain'},
	{name:'Thailand', title:'Massage Holiday in Pataya, Thailand', date:'2014-12-31', description:'A Mesmerising holiday in Thailand'},
	{name:'California', title:'Business Holiday in California, USA', date:'2014-09-29', description:'A fun at work in California, USA'}, 
	{name:'Japan', title:'Technocrat Holiday Japan', date:'2014-07-25', description:'Business and Pleasure'}];
}
</script>
</body>
</html>