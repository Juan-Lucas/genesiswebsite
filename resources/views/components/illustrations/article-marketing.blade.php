<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>
    
    <!-- Megaphone/Marketing -->
    <g transform="translate(200, 150)">
        <!-- Megaphone Body -->
        <path d="M-60,-40 L-60,40 L20,60 L20,-60 Z" fill="#667eea" opacity="0.6" stroke="#667eea" stroke-width="3"/>
        <path d="M-60,-35 L-60,35 L15,52 L15,-52 Z" fill="#374151"/>
        
        <!-- Megaphone Mouth -->
        <ellipse cx="20" cy="0" rx="10" ry="60" fill="#667eea" opacity="0.3" stroke="#667eea" stroke-width="3"/>
        <ellipse cx="20" cy="0" rx="6" ry="55" fill="#1F2937"/>
        
        <!-- Handle -->
        <rect x="-50" y="40" width="12" height="35" rx="6" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <rect x="-48" y="42" width="8" height="10" rx="2" fill="#764ba2" opacity="0.4"/>
        
        <!-- Sound Waves -->
        <g stroke="#667eea" stroke-width="3" fill="none" opacity="0.6">
            <path d="M35,-10 Q50,-15 65,-10"/>
            <path d="M35,10 Q50,15 65,10"/>
            <path d="M40,-20 Q60,-28 80,-20"/>
            <path d="M40,20 Q60,28 80,20"/>
            <path d="M45,-30 Q70,-42 95,-30"/>
            <path d="M45,30 Q70,42 95,30"/>
        </g>
        
        <!-- Decorative Lines -->
        <g stroke="#E5E7EB" stroke-width="1.5" opacity="0.4">
            <line x1="-50" y1="-25" x2="10" y2="-40"/>
            <line x1="-50" y1="-10" x2="10" y2="-20"/>
            <line x1="-50" y1="10" x2="10" y2="20"/>
            <line x1="-50" y1="25" x2="10" y2="40"/>
        </g>
        
        <!-- Shadow -->
        <ellipse cx="0" cy="80" rx="60" ry="10" fill="#667eea" opacity="0.15"/>
    </g>
    
    <!-- Chart/Analytics -->
    <g transform="translate(90, 200)">
        <!-- Chart Base -->
        <rect x="-30" y="-60" width="60" height="60" rx="4" fill="#374151" stroke="#764ba2" stroke-width="2"/>
        <rect x="-28" y="-58" width="56" height="56" rx="3" fill="#E5E7EB" opacity="0.9"/>
        
        <!-- Bar Chart -->
        <rect x="-22" y="-35" width="8" height="35" rx="2" fill="#667eea" opacity="0.7"/>
        <rect x="-10" y="-45" width="8" height="45" rx="2" fill="#764ba2" opacity="0.7"/>
        <rect x="2" y="-25" width="8" height="25" rx="2" fill="#667eea" opacity="0.7"/>
        <rect x="14" y="-50" width="8" height="50" rx="2" fill="#10B981" opacity="0.7"/>
        
        <!-- Trend Line -->
        <path d="M-20,-20 L-5,-35 L7,-15 L20,-42" stroke="#EF4444" stroke-width="2" fill="none"/>
        <circle cx="-20" cy="-20" r="2" fill="#EF4444"/>
        <circle cx="-5" cy="-35" r="2" fill="#EF4444"/>
        <circle cx="7" cy="-15" r="2" fill="#EF4444"/>
        <circle cx="20" cy="-42" r="2" fill="#EF4444"/>
    </g>
    
    <!-- Target/Goal -->
    <g transform="translate(320, 100)">
        <circle cx="0" cy="0" r="35" fill="none" stroke="#764ba2" stroke-width="3" opacity="0.6"/>
        <circle cx="0" cy="0" r="25" fill="none" stroke="#764ba2" stroke-width="3" opacity="0.7"/>
        <circle cx="0" cy="0" r="15" fill="none" stroke="#764ba2" stroke-width="3" opacity="0.8"/>
        <circle cx="0" cy="0" r="6" fill="#EF4444" opacity="0.8"/>
        
        <!-- Arrow -->
        <g transform="rotate(-45)">
            <line x1="0" y1="-40" x2="0" y2="10" stroke="#667eea" stroke-width="3"/>
            <polygon points="0,10 -5,0 5,0" fill="#667eea"/>
            <line x1="-8" y1="-32" x2="0" y2="-40" stroke="#667eea" stroke-width="2"/>
            <line x1="8" y1="-32" x2="0" y2="-40" stroke="#667eea" stroke-width="2"/>
        </g>
    </g>
    
    <!-- Social Media Icons -->
    <g transform="translate(90, 80)">
        <!-- Like Icon -->
        <circle cx="0" cy="0" r="15" fill="#667eea" opacity="0.2"/>
        <path d="M-5,-3 L-5,5 L5,5 L5,-1 Q5,-5 2,-5 Q0,-5 0,-3 Q0,-5 -2,-5 Q-5,-5 -5,-3 Z" fill="#667eea"/>
    </g>
    
    <g transform="translate(320, 220)">
        <!-- Share Icon -->
        <circle cx="0" cy="0" r="15" fill="#764ba2" opacity="0.2"/>
        <circle cx="-5" cy="-3" r="3" fill="none" stroke="#764ba2" stroke-width="1.5"/>
        <circle cx="5" cy="-3" r="3" fill="none" stroke="#764ba2" stroke-width="1.5"/>
        <circle cx="0" cy="5" r="3" fill="none" stroke="#764ba2" stroke-width="1.5"/>
        <line x1="-2" y1="-2" x2="2" y2="3" stroke="#764ba2" stroke-width="1.5"/>
        <line x1="2" y1="-2" x2="-2" y2="3" stroke="#764ba2" stroke-width="1.5"/>
    </g>
    
    <!-- Floating Icons -->
    <circle cx="70" cy="230" r="12" fill="#667eea" opacity="0.15"/>
    <rect x="330" y="250" width="16" height="16" rx="3" fill="#764ba2" opacity="0.15" transform="rotate(20 338 258)"/>
</svg>
