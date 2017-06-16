<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// home
$route['default_controller'] = 'home/index';
$route['home/faculty'] = 'home/faculty';
$route['home/branch'] = 'home/branch';
$route['home/hasCourseDetail'] = 'home/hasCourseDetail';
$route['home/courseDetail/(:num)'] = 'home/getCourseDetail/$1';

// course
$route['course/registration'] = 'course/registration';
$route['course/register'] = 'course/register';
$route['course/(:any)'] = 'course/info/$1';

//admin
$route['admin/index'] = 'admin/index';
$route['admin/question'] = 'admin/question';
$route['admin/answer'] = 'admin/answer';
$route['admin/login'] = 'admin/login';
$route['admin/logout'] = 'admin/logout';

//admin api
$route['admin/api/getDegree'] = 'admin/getDegree';
$route['admin/api/addDegree'] = 'admin/addDegree';
$route['admin/api/updateDegree'] = 'admin/updateDegree';
$route['admin/api/deleteDegree'] = 'admin/deleteDegree';

$route['admin/api/getFaculty'] = 'admin/getFaculty';
$route['admin/api/addFaculty'] = 'admin/addFaculty';
$route['admin/api/updateFaculty'] = 'admin/updateFaculty';
$route['admin/api/deleteFaculty'] = 'admin/deleteFaculty';

$route['admin/api/getBranch'] = 'admin/getBranch';
$route['admin/api/addBranch'] = 'admin/addBranch';
$route['admin/api/updateBranch'] = 'admin/updateBranch';
$route['admin/api/deleteBranch'] = 'admin/deleteBranch';

$route['admin/api/getCourseDetail'] = 'admin/getCourseDetail';
$route['admin/api/updateCourseDetail'] = 'admin/updateCourseDetail';
$route['admin/previewCourseDetail'] = 'admin/previewCourseDetail';

$route['admin/api/getQuestions'] = 'admin/getQuestions';
$route['admin/api/answerQuestion'] = 'admin/answerQuestion';
$route['admin/api/deleteQuestion'] = 'admin/deleteQuestion';

$route['admin/api/getAnswers'] = 'admin/getAnswers';

$route['assets/(:any)'] = 'assets/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
