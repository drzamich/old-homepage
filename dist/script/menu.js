/**
 * @author S³awomir Kok³owski {@link http://www.kurshtml.boo.pl}
 * @copyright NIE usuwaj tego komentarza! (Do NOT remove this comment!)
 */

function Menu(id, style, otworz, wysun, czasRozwin, czasZwin, czasOtworz, czasZamknij, nieInicjalizuj)
{
	if (typeof czasRozwin == 'undefined' || czasRozwin < 0) czasRozwin = 25;
	if (typeof czasZwin == 'undefined' || czasZwin < 0) czasZwin = 25;
	if (typeof czasOtworz == 'undefined' || czasOtworz < 0) czasOtworz = 250;
	if (typeof czasZamknij == 'undefined' || czasZamknij < 0) czasZamknij = 500;
	
	if (style)
	{
		if (style.indexOf(':') < 0)
		{
			document.getElementById(id).className += ' ' + style;
		}
		else
		{
			style = style.replace(/(^\s+|(\s|;)+$)/g, '').split(/\s*;\s*/);
			for (var i = 0; i < style.length; i++)
			{
				style[i] = style[i].split(/\s*:\s*/);
				for (var j = 0, c, property = ''; j < style[i][0].length; j++)
				{
					c = style[i][0].charAt(j);
					property += c == '-' ? style[i][0].charAt(++j).toUpperCase() : c.toLowerCase();
				}
				eval('document.getElementById("' + id + '").style.' + property + ' = "' + style[i][1].replace(/"/g, '\\"') + '"');
			}
		}
	}
	
	for (var i = 0; i < document.getElementById(id).getElementsByTagName('dt').length; i++)
	{
		var dd = new Array();
		var el = document.getElementById(id).getElementsByTagName('dt')[i].nextSibling;
		var nodeName;
		while (el && (nodeName = el.nodeName.toLowerCase()) != 'dt')
		{
			if (nodeName == 'dd')
			{
				el._dt = document.getElementById(id).getElementsByTagName('dt')[i];
				if (otworz)
				{
					el.onmouseover = function()
					{
						clearTimeout(this._dt._timoutID);
						this._dt._displayed = false;
						this._dt.onclick();
					}
					el.onmouseout = function()
					{
						clearTimeout(this._dt._timoutID);
						var dt = this._dt;
						this._dt._timoutID = setTimeout(function () { dt._displayed = true; dt.onclick(); }, czasZamknij);
					};
				}
				dd[dd.length] = el;
			}
			el = el.nextSibling;
		}
		document.getElementById(id).getElementsByTagName('dt')[i]._dd = dd;
		document.getElementById(id).getElementsByTagName('dt')[i]._timoutID = null;
		document.getElementById(id).getElementsByTagName('dt')[i]._displayed = false;
		document.getElementById(id).getElementsByTagName('dt')[i].onclick = function()
		{
			clearTimeout(this._timoutID);
			if (!this._displayed)
			{
				var el = this.parentNode.getElementsByTagName('dt')[0];
				while (el)
				{
					if (el.nodeName.toLowerCase() == 'dt' && el != this)
					{
						el._displayed = false;
						if (czasZwin) display(el, 0);
						else display(el);
					}
					el = el.nextSibling;
				}
			}
			this._displayed = !this._displayed;
			if (this._displayed && czasRozwin || !this._displayed && czasZwin) display(this, 0);
			else display(this);
		};
		if (otworz)
		{
			document.getElementById(id).getElementsByTagName('dt')[i].onmouseover = function()
			{
				clearTimeout(this._timoutID);
				var dt = this;
				this._timoutID = setTimeout(function () { dt._displayed = false; dt.onclick(); }, czasOtworz);
			};
			document.getElementById(id).getElementsByTagName('dt')[i].onmouseout = function()
			{
				clearTimeout(this._timoutID);
				var dt = this;
				this._timoutID = setTimeout(function () { dt._displayed = true; dt.onclick(); }, czasZamknij);
			};
		}
	}
	
	start(document.getElementById(id).getElementsByTagName('dt')[0]);
	
	function start(dt)
	{
		var hide = true;
		var el = dt;
		while (el)
		{
			var nodeName = el.nodeName.toLowerCase();
			if (nodeName == 'dt')
			{
				dt = el;
				hide = true;
			}
			if (nodeName == 'dt' || nodeName == 'dd')
			{
				if (!nieInicjalizuj && el.getElementsByTagName('a').length && el.getElementsByTagName('a')[0].href && unescape(el.getElementsByTagName('a')[0].href) == unescape(window.location.href))
				{
					el.className = (el.className ? el.className + ' ' : '') + 'active';
					dt._displayed = true;
					display(dt);
					hide = false;
					var el_parentNode = el.parentNode;
					while (el_parentNode != document.getElementById(id))
					{
						if (el_parentNode.nodeName.toLowerCase() == 'dd')
						{
							var el_sibling = el_parentNode.previousSibling;
							while (el_sibling)
							{
								if (el_sibling.nodeName.toLowerCase() == 'dt')
								{
									el_sibling._displayed = true;
									display(el_sibling)
									break;
								}
								el_sibling = el_sibling.previousSibling;
							}
						}
						el_parentNode = el_parentNode.parentNode;
					}
				}
			}
			if (nodeName == 'dd')
			{
				if (hide) el.style.display = 'none';
				start(el.getElementsByTagName('dt')[0]);
			}
			el = el.nextSibling;
		}
	}
	
	function display(dt, i)
	{
		if (typeof i == 'undefined')
		{
			for (var i = 0; i < dt._dd.length; i++)
			{
				dt._dd[i].style.display = dt._displayed ? 'block' : 'none';
			}
		}
		else if (i < dt._dd.length)
		{
			var dir = wysun ? !dt._displayed : dt._displayed;
			dt._dd[dir ? i : dt._dd.length - 1 - i].style.display = dt._displayed ? 'block' : 'none';
			dt._timoutID = setTimeout(function() { display(dt, i + 1); }, dt._displayed ? czasRozwin : czasZwin);
		}
	}
}