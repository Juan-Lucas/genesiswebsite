<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>
    
    <!-- Central Chip/Processor -->
    <g transform="translate(200, 150)">
        <!-- Chip Base -->
        <rect x="-60" y="-60" width="120" height="120" rx="8" fill="#1F2937" stroke="#667eea" stroke-width="3"/>
        
        <!-- Chip Surface -->
        <rect x="-50" y="-50" width="100" height="100" rx="6" fill="#374151"/>
        
        <!-- Circuit Pattern -->
        <g opacity="0.9">
            <!-- Center Core -->
            <rect x="-30" y="-30" width="60" height="60" rx="4" fill="#667eea" opacity="0.3" stroke="#667eea" stroke-width="2"/>
            <rect x="-20" y="-20" width="40" height="40" rx="3" fill="#764ba2" opacity="0.3" stroke="#764ba2" stroke-width="2"/>
            <rect x="-10" y="-10" width="20" height="20" rx="2" fill="#667eea" opacity="0.4"/>
            
            <!-- Circuit Lines -->
            <line x1="-30" y1="-15" x2="-50" y2="-15" stroke="#667eea" stroke-width="2"/>
            <line x1="-30" y1="0" x2="-50" y2="0" stroke="#764ba2" stroke-width="2"/>
            <line x1="-30" y1="15" x2="-50" y2="15" stroke="#667eea" stroke-width="2"/>
            
            <line x1="30" y1="-15" x2="50" y2="-15" stroke="#667eea" stroke-width="2"/>
            <line x1="30" y1="0" x2="50" y2="0" stroke="#764ba2" stroke-width="2"/>
            <line x1="30" y1="15" x2="50" y2="15" stroke="#667eea" stroke-width="2"/>
            
            <line x1="-15" y1="-30" x2="-15" y2="-50" stroke="#667eea" stroke-width="2"/>
            <line x1="0" y1="-30" x2="0" y2="-50" stroke="#764ba2" stroke-width="2"/>
            <line x1="15" y1="-30" x2="15" y2="-50" stroke="#667eea" stroke-width="2"/>
            
            <line x1="-15" y1="30" x2="-15" y2="50" stroke="#667eea" stroke-width="2"/>
            <line x1="0" y1="30" x2="0" y2="50" stroke="#764ba2" stroke-width="2"/>
            <line x1="15" y1="30" x2="15" y2="50" stroke="#667eea" stroke-width="2"/>
            
            <!-- Connection Nodes -->
            <circle cx="-50" cy="-15" r="3" fill="#667eea"/>
            <circle cx="-50" cy="0" r="3" fill="#764ba2"/>
            <circle cx="-50" cy="15" r="3" fill="#667eea"/>
            
            <circle cx="50" cy="-15" r="3" fill="#667eea"/>
            <circle cx="50" cy="0" r="3" fill="#764ba2"/>
            <circle cx="50" cy="15" r="3" fill="#667eea"/>
            
            <circle cx="-15" cy="-50" r="3" fill="#667eea"/>
            <circle cx="0" cy="-50" r="3" fill="#764ba2"/>
            <circle cx="15" cy="-50" r="3" fill="#667eea"/>
            
            <circle cx="-15" cy="50" r="3" fill="#667eea"/>
            <circle cx="0" cy="50" r="3" fill="#764ba2"/>
            <circle cx="15" cy="50" r="3" fill="#667eea"/>
        </g>
        
        <!-- Chip Pins - Left -->
        <rect x="-70" y="-25" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="-70" y="-15" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="-70" y="-5" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="-70" y="5" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="-70" y="15" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="-70" y="25" width="10" height="4" fill="#667eea" opacity="0.7"/>
        
        <!-- Chip Pins - Right -->
        <rect x="60" y="-25" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="60" y="-15" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="60" y="-5" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="60" y="5" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="60" y="15" width="10" height="4" fill="#667eea" opacity="0.7"/>
        <rect x="60" y="25" width="10" height="4" fill="#667eea" opacity="0.7"/>
        
        <!-- Chip Pins - Top -->
        <rect x="-25" y="-70" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="-15" y="-70" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="-5" y="-70" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="5" y="-70" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="15" y="-70" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="25" y="-70" width="4" height="10" fill="#667eea" opacity="0.7"/>
        
        <!-- Chip Pins - Bottom -->
        <rect x="-25" y="60" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="-15" y="60" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="-5" y="60" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="5" y="60" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="15" y="60" width="4" height="10" fill="#667eea" opacity="0.7"/>
        <rect x="25" y="60" width="4" height="10" fill="#667eea" opacity="0.7"/>
        
        <!-- Shadow -->
        <ellipse cx="0" cy="75" rx="70" ry="10" fill="#667eea" opacity="0.15"/>
    </g>
    
    <!-- Binary Code -->
    <g transform="translate(80, 100)" fill="#667eea" opacity="0.3" font-family="monospace" font-size="12">
        <text x="0" y="0">101010</text>
        <text x="0" y="15">110011</text>
        <text x="0" y="30">001101</text>
    </g>
    
    <g transform="translate(320, 180)" fill="#764ba2" opacity="0.3" font-family="monospace" font-size="12">
        <text x="0" y="0">111000</text>
        <text x="0" y="15">010101</text>
        <text x="0" y="30">100110</text>
    </g>
    
    <!-- Floating Icons -->
    <circle cx="90" cy="220" r="15" fill="#667eea" opacity="0.15"/>
    <circle cx="330" cy="80" r="18" fill="#764ba2" opacity="0.2"/>
    <rect x="310" y="230" width="20" height="20" rx="4" fill="#667eea" opacity="0.15" transform="rotate(25 320 240)"/>
</svg>
