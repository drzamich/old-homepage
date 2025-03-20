/**
 * @author Sławomir Kokłowski {@link http://www.kurshtml.boo.pl}
 * @copyright NIE usuwaj tego komentarza! (Do NOT remove this comment!)
 */

function Skin(name, expires, path, message)
{
	this.expires = typeof expires != 'undefined' ? expires : 365;
	this.message = typeof message != 'undefined' ? message : 'Wymagana obsługa cookie';
	this.name = typeof name != 'undefined' ? name : 'skin';
	this.path = typeof path != 'undefined' ? path : '/';
	
	var link = null;
	var original = '';
	var css = '';
	
	this.get = function()
	{
		if (css != '') return css;
		var matches = document.cookie.match(new RegExp('(^|;\\s*)' + this.name + '=([^;]*)'));
		if (matches && matches.length == 3) css = matches[2];
		return css;
	}
	
	this.set = function(url)
	{
		document.cookie = this.name + '=' + url + (this.expires > 0 ? ';expires=' + new Date(new Date().getTime() + 86400000 * this.expires).toGMTString() : '') + ';path=' + this.path;
		css = url;
		if (this.message != '' && !navigator.cookieEnabled) window.alert(this.message);
		this.show();
	}
	
	this.reset = function()
	{
		css = '';
		document.cookie = this.name + '=;path=' + this.path;
		this.show();
	}
	
	this.show = function()
	{
		var url = this.get();
		if (url != '' || original != '')
		{
			if (link == null || original == '')
			{
				for (var i = 0; i < document.getElementsByTagName('link').length; i++)
				{
					if (document.getElementsByTagName('link')[i].getAttribute('rel').toLowerCase() == 'stylesheet')
					{
						link = document.getElementsByTagName('link')[i];
						original = link.getAttribute('href');
						break;
					}
				}
			}
			link.setAttribute('href', url != '' ? url : original);
		}
	}
	
	this.show();
}


var skin = new Skin();