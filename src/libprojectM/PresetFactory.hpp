//
// C++ Interface: PresetFactory
//
// Description: 
//
//
// Author: Carmelo Piccione <carmelo.piccione@gmail.com>, (C) 2008
//
// Copyright: See COPYING file that comes with this distribution
//
//

#include "Preset.hpp"
#include <memory>

#ifndef __PRESET_FACTORY_HPP
#define __PRESET_FACTORY_HPP

class PresetFactory {

public:

 inline PresetFactory() {}

 inline virtual ~PresetFactory() {}

 /// Constructs a new preset given an url
 /// \param url a locational identifier referencing the preset
 /// \param name the preset name
 /// \param author the preset author
 /// \returns a valid preset object
 virtual std::auto_ptr<Preset> allocate(const std::string & url, const std::string & name=std::string(),
	 const std::string & author=std::string()) = 0;

 /// Returns a space separated list of supported extensions
 virtual std::string supportedExtensions() const = 0;
	
};

#endif
