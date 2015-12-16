angular.module('vacationApp', [])
  .controller('AlbumListController', ['$scope', AlbumListController]);
function AlbumListController ($scope){

	$scope.albums = [{name:'Madrid', title:'Holiday in Madrid', date:'2014-02-02', description:'A feb holiday in Madrid, spain'},
	{name:'Thailand', title:'Massage Holiday in Pataya, Thailand', date:'2014-12-31', description:'A Mesmerising holiday in Thailand'},
	{name:'California', title:'Business Holiday in California, USA', date:'2014-09-29', description:'A fun at work in California, USA'}, 
	{name:'Japan', title:'Technocrat Holiday Japan', date:'2014-07-25', description:'Business and Pleasure'}];
}