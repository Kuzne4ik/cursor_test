<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_webgl_params function

// Enable WebGL first
WEB::$browser->enable_java_script(true);

// Create WebGL params object
$webgl_params = new XHEWebGLParams();

// Set basic WebGL parameters
$webgl_params->VENDOR = "NVIDIA Corporation";
$webgl_params->RENDERER = "GeForce RTX 3070/PCIe/SSE2";
$webgl_params->VERSION = "(3.3.0 NVIDIA 470.57.02)";
$webgl_params->SHADING_LANGUAGE_VERSION = "(3.30 NVIDIA via Cg compiler)";
$webgl_params->UNMASKED_VENDOR = "NVIDIA Corporation";
$webgl_params->UNMASKED_RENDERER = "GeForce RTX 3070/PCIe/SSE2";
$webgl_params->MAX_VERTEX_ATTRIBS = "16";
$webgl_params->MAX_VERTEX_UNIFORM_VECTORS = "253";
$webgl_params->MAX_VERTEX_TEXTURE_IMAGE_UNITS = "4";
$webgl_params->MAX_VARYING_VECTORS = "9";
$webgl_params->MAX_VERTEX_UNIFORM_COMPONENTS = "16380";
$webgl_params->MAX_VERTEX_UNIFORM_BLOCKS = "12";
$webgl_params->MAX_VERTEX_OUTPUT_COMPONENTS = "120";
$webgl_params->MAX_VARYING_COMPONENTS = "120";
$webgl_params->MAX_TRANSFORM_FEEDBACK_INTERLEAVED_COMPONENTS = "121";
$webgl_params->MAX_TRANSFORM_FEEDBACK_SEPARATE_ATTRIBS = "4";
$webgl_params->MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS = "4";
$webgl_params->ALIASED_LINE_WIDTH_RANGE = "float32array";
$webgl_params->ALIASED_POINT_SIZE_RANGE = "float32array";
$webgl_params->MAX_FRAGMENT_UNIFORM_VECTORS = "221";
$webgl_params->MAX_TEXTURE_IMAGE_UNITS = "17";
$webgl_params->MAX_FRAGMENT_UNIFORM_COMPONENTS = "17";
$webgl_params->MAX_FRAGMENT_UNIFORM_BLOCKS = "13";
$webgl_params->MAX_FRAGMENT_INPUT_COMPONENTS = "121";
$webgl_params->MIN_PROGRAM_TEXEL_OFFSET = "-9";
$webgl_params->MAX_PROGRAM_TEXEL_OFFSET = "8";
$webgl_params->MAX_DRAW_BUFFERS = "9";
$webgl_params->MAX_COLOR_ATTACHMENTS = "9";
$webgl_params->MAX_SAMPLES = "9";
$webgl_params->RED_BITS = "9";
$webgl_params->GREEN_BITS = "9";
$webgl_params->BLUE_BITS = "9";
$webgl_params->ALPHA_BITS = "9";
$webgl_params->DEPTH_BITS = "32";
$webgl_params->STENCIL_BITS = "8";
$webgl_params->MAX_RENDERBUFFER_SIZE = "32768";
$webgl_params->MAX_VIEWPORT_DIMS = "new Int32Array([16385,16385])";
$webgl_params->MAX_TEXTURE_SIZE = "32768";
$webgl_params->MAX_CUBE_MAP_TEXTURE_SIZE = "32768";
$webgl_params->MAX_COMBINED_TEXTURE_IMAGE_UNITS = "32768";
$webgl_params->MAX_TEXTURE_MAX_ANISOTROPY_EXT = "32";
$webgl_params->MAX_3D_TEXTURE_SIZE = "4096";
$webgl_params->MAX_ARRAY_TEXTURE_LAYERS = "4096";
$webgl_params->MAX_TEXTURE_LOD_BIAS = "4";
$webgl_params->MAX_UNIFORM_BUFFER_BINDINGS = "32";
$webgl_params->MAX_UNIFORM_BLOCK_SIZE = "32768";
$webgl_params->UNIFORM_BUFFER_OFFSET_ALIGNMENT = "512";
$webgl_params->MAX_COMBINED_UNIFORM_BLOCKS = "32";
$webgl_params->MAX_COMBINED_VERTEX_UNIFORM_COMPONENTS = "";
$webgl_params->MAX_COMBINED_FRAGMENT_UNIFORM_COMPONENTS = "512678";

$result = WEB::$browser->set_webgl_params($webgl_params);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set WebGL parameters";
} else {
    echo "\n\nFailed to set WebGL parameters";
}

// Navigate to test WebGL
$url2 = "https://get.webgl.org";
WEB::$browser->navigate($url2);
WEB::$browser->wait_js(5);

echo "\n\nNavigated to: " . $url2;
echo "\nWebGL parameters should be applied";

// Reset by setting empty params
$webgl_params2 = new XHEWebGLParams();
$result2 = WEB::$browser->set_webgl_params($webgl_params2);
echo "\n\nReset WebGL params: " . ($result2 ? "Success" : "Failed");

// Navigate one final time
WEB::$browser->navigate($url2);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url2;
echo "\nWebGL parameters reset to default";

// Остановить работу
WINDOW::$app->quit();
?>