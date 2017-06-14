using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(DUPProjectFile.Startup))]
namespace DUPProjectFile
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
