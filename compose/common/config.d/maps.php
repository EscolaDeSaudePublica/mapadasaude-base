<?php

return [
    'maps.includeGoogleLayers'  => env('MAPS_USE_GOOGLE_LAYERS', false),
    'app.useGoogleGeocode'      => env('MAPS_USE_GOOGLE_GEOCODE', false),
    'app.googleApiKey'          => env('MAPS_GOOGLE_API_KEY', ''),

    'maps.center' => [-5.058114374355702, -39.4134521484375],
    
    'maps.maxClusterRadius'             => (int) env('MAPS_CLUSTER_MAX_RADIUS', 40),
    'maps.maxClusterElements'           => (int) env('MAPS_CLUSTER_MAX_ELEMENTS', 6),
    'maps.spiderfyDistanceMultiplier'   => (float) env('MAPS_SPIDERFY_DISTANCE_MULTIPLIER', 1.3),
    
    'maps.zoom.default' => 8,
    'maps.zoom.approximate' => (int) env('MAPS_ZOOM_APPROXIMATE', 14),
    'maps.zoom.precise'     => (int) env('MAPS_ZOOM_PRECISE', 16),
    'maps.zoom.max'         => (int) env('MAPS_ZOOM_MAX', 18),
    'maps.zoom.min'         => (int) env('MAPS_ZOOM_MIN', 5),

    'maps.geometryFieldQuery' => "ST_SimplifyPreserveTopology(geom, 0.001)",
];