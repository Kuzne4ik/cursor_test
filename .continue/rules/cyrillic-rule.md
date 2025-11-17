---
description: Cyrillic encoding rule
---
All input and output data must be strictly UTF-8 encoded. Do not modify or re-encode characters. It's especially important to correctly handle Cyrillic characters (Russian, Ukrainian, Belarusian, etc.). If you see distorted characters like "пїЅ," this indicates an encoding error. Don't repeat them, but restore the original text to UTF-8.