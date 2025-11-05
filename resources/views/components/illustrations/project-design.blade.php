<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Palette -->
    <g transform="translate(200, 150)">
        <!-- Main palette shape -->
        <ellipse cx="0" cy="0" rx="90" ry="70" fill="#F3F4F6"/>
        <ellipse cx="0" cy="0" rx="85" ry="65" fill="white"/>

        <!-- Thumb hole -->
        <ellipse cx="60" cy="30" rx="15" ry="20" fill="#E5E7EB"/>

        <!-- Paint colors -->
        <circle cx="-40" cy="-20" r="14" fill="#EF4444"/>
        <circle cx="-10" cy="-30" r="14" fill="#F59E0B"/>
        <circle cx="20" cy="-30" r="14" fill="#FCD34D"/>
        <circle cx="-50" cy="10" r="14" fill="#10B981"/>
        <circle cx="-20" cy="15" r="14" fill="#667eea"/>
        <circle cx="10" cy="20" r="14" fill="#764ba2"/>
        <circle cx="40" cy="5" r="14" fill="#EC4899"/>

        <!-- Shine effects -->
        <circle cx="-40" cy="-23" r="4" fill="white" opacity="0.6"/>
        <circle cx="-10" cy="-33" r="4" fill="white" opacity="0.6"/>
        <circle cx="20" cy="-33" r="4" fill="white" opacity="0.6"/>
    </g>

    <!-- Brush -->
    <g transform="translate(280, 100) rotate(-45)">
        <!-- Handle -->
        <rect x="0" y="0" width="60" height="8" rx="4" fill="#8B4513"/>
        <rect x="0" y="0" width="60" height="4" rx="2" fill="#A0522D"/>

        <!-- Ferrule -->
        <rect x="60" y="-2" width="12" height="12" fill="#9CA3AF"/>

        <!-- Bristles -->
        <path d="M 72 0 L 72 8 L 85 6 L 85 2 Z" fill="#6B7280"/>
        <line x1="75" y1="2" x2="75" y2="6" stroke="#4B5563" stroke-width="1"/>
        <line x1="78" y1="2" x2="78" y2="6" stroke="#4B5563" stroke-width="1"/>
        <line x1="81" y1="2" x2="81" y2="6" stroke="#4B5563" stroke-width="1"/>

        <!-- Paint on brush -->
        <ellipse cx="82" cy="4" rx="4" ry="3" fill="#667eea" opacity="0.7"/>
    </g>

    <!-- Decorative splashes -->
    <circle cx="80" cy="220" r="8" fill="#667eea" opacity="0.3"/>
    <circle cx="320" cy="70" r="6" fill="#764ba2" opacity="0.3"/>
    <circle cx="110" cy="80" r="5" fill="#10B981" opacity="0.3"/>
</svg>
